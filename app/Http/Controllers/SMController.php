<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\SuratMasuk;
use Carbon\Carbon;
use PDF;
use File;

class SMController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('surat-masuk.index');
    }

    public function cari()
    {
        $cari = Input::get('cari');
         $result = DB::SELECT(
            "SELECT * FROM surat_masuk WHERE (no_agenda LIKE '%$cari%' OR no_surat LIKE '%$cari%' OR asal_surat LIKE '%$cari%' OR perihal LIKE '%$cari%') ORDER BY created_at desc
            ");
        if($result==0){
            return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Nomor Surat Masuk Tidak Sesuai');
        }else{
            return view('surat-masuk.index', compact('result'));
        }
    }

    public function create()
    {
        date_default_timezone_set("Asia/Bangkok");
        $tanggal = date('d').'-'.date('m').'-'.date('Y');
        $tetap = 'AGD';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $nomor = \App\SuratMasuk::max('no_agenda');
        $noUrut = (int) substr($nomor, 0, 4);
        $nomora = $noUrut+1;
        $nomorurut = sprintf("%04s", $nomora).'/'.$tetap.'/'.$bulanRomawi[date('n')].'/'.date('Y');

        $hasil = DB::SELECT("SELECT DISTINCT no_agenda, no_surat, perihal, asal_surat, tgl_surat, tgl_agenda, file_sm FROM surat_masuk ORDER BY no_agenda DESC LIMIT 60");
        return view('surat-masuk.create', compact('nomorurut', 'tanggal', 'hasil'));
    }

    public function store(Request $request)
    {
        //
    }

    public function simpan(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $tgl_surat = date('d-m-Y');
        $request->validate([
            'no_agenda' => 'required',
            'no_surat' => 'required',
            'asal_surat' => 'required',
            'sifat_surat' => 'required',
            'perihal' => 'required',
            'tgl_agenda' => 'required',
            'tgl_surat' => 'required',
            'status' => 'required',
            'file_sm' => 'mimes:pdf|max:2000',
            'user_create' => 'required'
        ]);

        // menyimpan data file yang di upload ke variabel $file
        $file = $request->file('file_sm');

        // menyimpan file dengan nama
        $nama_file = time()."_".$file->getClientOriginalName();
        // isi dengan nama folder tempat kemana menyimpan file
        $tujuan_upload = 'file/surat_masuk';
        $file->move($tujuan_upload,$nama_file);

        SuratMasuk::create([
            'no_agenda' => $request->no_agenda,
            'no_surat' => $request->no_surat,
            'asal_surat' => $request->asal_surat,
            'sifat_surat' => $request->sifat_surat,
            'perihal' => $request->perihal,
            'tgl_agenda' => $request->tgl_agenda,
            'tgl_surat' => $request->tgl_surat,
            'status' => $request->status,
            'file_sm' => $nama_file,
            'user_create' => $request->user_create
            ]);
        return back()->with('success', 'Surat Masuk Baru berhasil diarsipkan dengan nomor agenda '.$request->no_agenda.'');
    }

    public function show($id)
    {
        //
    }

    public function editsm($no_agenda)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $tanggal = date('d').'-'.date('m').'-'.date('Y');
            $tetap = 'AGD';
            $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
            $nomor = \App\SuratMasuk::max('no_agenda');
            $noUrut = (int) substr($nomor, 0, 4);
            $nomora = $noUrut+1;
            $nomorurut = sprintf("%04s", $nomora).'/'.$tetap.'/'.$bulanRomawi[date('n')].'/'.date('Y');

            $agenda = decrypt($no_agenda);
            $result =DB::SELECT("SELECT * FROM surat_masuk WHERE no_agenda='$agenda'");

            $hasil = DB::SELECT("SELECT DISTINCT no_agenda, no_surat, perihal, asal_surat, tgl_surat, tgl_agenda, file_sm FROM surat_masuk ORDER BY no_agenda DESC LIMIT 10");
            return view('surat-masuk.create', compact('nomorurut', 'tanggal','result', 'hasil'));
        }
    }

    public function updatesm(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5){
            abort(403);
        }else{
                date_default_timezone_set("Asia/Bangkok");
                $request->validate([
                'no_agenda' => 'required',
                'no_surat' => 'required',
                'asal_surat' => 'required',
                'sifat_surat' => 'required',
                'perihal' => 'required',
                'tgl_agenda' => 'required',
                'tgl_surat' => 'required',
                'status' => 'required',
                'file_sm' => 'mimes:pdf|max:2000',
                'user_create' => 'required'
                ]);

                // menyimpan data file yang di upload ke variabel $file
                if(empty($request->file('file_sm'))){
                    $sm = SuratMasuk::find($request->no_agenda);
                    $sm->no_surat = $request->get('no_surat');
                    $sm->asal_surat = $request->get('asal_surat');
                    $sm->sifat_surat = $request->get('sifat_surat');
                    $sm->perihal = $request->get('perihal');
                    $sm->tgl_agenda = $request->get('tgl_agenda');
                    $sm->tgl_surat = $request->get('tgl_surat');
                    $sm->user_create = $request->get('user_create');
                    $sm->save();

                    return redirect()->route('sm.create')
                            ->with('success', 'Surat dengan Nomor Agenda '.$request->no_agenda.' berhasil di update');
                }else{
                    $file = $request->file('file_sm');

                    // menyimpan file dengan nama
                    $nama_file = time()."_".$file->getClientOriginalName();
                    // isi dengan nama folder tempat kemana menyimpan file
                    $tujuan_upload = 'file/surat_masuk';
                    $file->move($tujuan_upload,$nama_file);

                    $sm = SuratMasuk::find($request->no_agenda);
                    $sm->no_surat = $request->get('no_surat');
                    $sm->asal_surat = $request->get('asal_surat');
                    $sm->sifat_surat = $request->get('sifat_surat');
                    $sm->perihal = $request->get('perihal');
                    $sm->tgl_agenda = $request->get('tgl_agenda');
                    $sm->tgl_surat = $request->get('tgl_surat');
                    $sm->file_sm = $nama_file;
                    $sm->user_create = $request->get('user_create');
                    $sm->save();


                    return redirect()->route('sm.create')
                            ->with('success', 'Surat dengan Nomor Agenda '.$request->no_agenda.' berhasil di update');
                }
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function hapus($no_agenda)
    {
            $sm = SuratMasuk::where('no_agenda', $no_agenda)->first();
            if ($sm != null) {
                $sm->delete();
                return redirect()->route('sm.create')
                            ->with('success', 'Data berhasil dihapus');
            }
            return redirect()->back()
                            ->with('error', 'Data Gagal di Hapus');
         
    }

    public function agendaindex()
    {
        return view('surat-masuk.index');
    }

    public function printdisposisi(Request $request,$no_agenda)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $bulan = array("", "Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
            $hariini = date('d').' '.$bulan[date('n')].' '.date('Y');
                $id = decrypt($no_agenda);
                $result = DB::SELECT(
                    "SELECT DISTINCT no_agenda, no_surat, asal_surat, sifat_surat, perihal, tgl_agenda, tgl_surat, status
                    FROM surat_masuk
                    WHERE no_agenda='$id'
                    ");
                $view  = \View::make('surat-masuk.cetakdisposisi',['hariini' => $hariini ,'result' => $result])->render();
                $pdf   = \App::make('dompdf.wrapper');
                $pdf->loadHTML($view)->setPaper('a4', 'potrait');
                
                return $pdf->stream($id.".Pdf");  
        }  
    }

    public function agenda()
    {
        $agenda = DB::table('surat_masuk')->orderBy('no_agenda', 'desc')->paginate(10);
        return view('surat-masuk.logagendasm', compact('agenda'));
    }

    public function cari_buku_agenda()
    {
        $agenda = DB::table('surat_masuk')->orderBy('no_agenda', 'desc')->paginate(10);
        return view('surat-masuk.logagendasm', compact('agenda'));
    }

    public function cetak_agenda()
    {
        $agenda = DB::table('surat_masuk')->paginate(300);
        $view  = \View::make('surat-masuk.cetakagenda',['agenda' => $agenda])->render();
        $pdf   = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
                
        return $pdf->stream();
    }

}
