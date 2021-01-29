<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\SurketAktif;
use App\Pejabat;
use Carbon\Carbon;
use PDF;

class SurketController extends Controller
{

    public static $kon = 'mysql';
    public static $con = 'mysql2';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            $tampil = DB::SELECT("SELECT DISTINCT no_surat, nim, nama_mahasiswa, tempat_lahir_mahasiswa, tgl_lahir, alamat_mahasiswa, nama_program_studi, mr_awal, mr_akhir FROM t_surket_mhs_aktif ORDER BY no_surat DESC LIMIT 10");
            return view('surket.index', compact('tampil'));
        }
    }

    public function search()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            $tetap = 'UN31.UPBJJ.15/KM.00.00';
            $nomor = \App\SurketAktif::max('no_surat');
            $noUrut = (int) substr($nomor, 0, 4);
            $nomora = $noUrut+1;
            $nomorurut = sprintf("%04s", $nomora).'/'.$tetap.'/'.date('Y');

            $pejabat = DB::connection('mysql')->SELECT("SELECT nip,nama_pegawai FROM m_pejabat");

            $cari = Input::get('cari');
            $result = DB::connection('mysql2')->SELECT(
                "SELECT DISTINCT a.nim, a.nama_mahasiswa, a.tempat_lahir_mahasiswa, a.tanggal_lahir_mahasiswa,
                  b.nama_program_studi, c.nama_fakultas, a.masa_registrasi_awal, d.masa, a.alamat_mahasiswa 
                  FROM m_data_pribadi a 
                  LEFT JOIN m_program_studi b ON a.kode_program_studi=b.kode_program_studi
                  LEFT JOIN m_fakultas c ON b.kode_fakultas=c.kode_fakultas
                  LEFT JOIN t_billing_header d ON a.nim=d.nim
                  WHERE a.kode_upbjj='24'
                  AND (d.statusbank='1' or d.statusbank='0')
                  AND (a.kode_status_dp='DA' or a.kode_status_dp='DN' or a.kode_status_dp='DS') 
                  AND a.nim='$cari'
                  ORDER BY d.masa DESC LIMIT 1
                ");
            if($result == null){
                return redirect()->back()->with('error', 'Data Mahasiswa Yang anda cari tidak ditemukan');
            }else{
                return view('surket.index', compact('result', 'nomorurut', 'pejabat'));
            }
        }
    }

    public function create()
    {
        //
    }

    public function simpan(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $input =$request->all();
            $aturan = array(
                'nim' => 'required|unique:t_surket_mhs_aktif',
            );

            $validator = Validator::make($input,$aturan);
            if($validator->fails()){
                return redirect()->route('surket.index')->with('error', 'NIM  "'.$request->nim.'" dengan Nama "'.$request->nama_mahasiswa.'" sudah pernah dibuatkan surat keterangan mahasiswa aktif, silahkan cek diperagaan');
            }
            SurketAktif::create([
                'no_surat' => $request->no_surat,
                'kode_surat' => $request->kode_surat,
                'nim' => $request->nim,
                'nama_mahasiswa' => $request->nama_mahasiswa,
                'tempat_lahir_mahasiswa' => $request->tempat_lahir_mahasiswa,
                'tgl_lahir' => $request->tgl_lahir,
                'nama_program_studi' => $request->nama_program_studi,
                'nama_fakultas' => $request->nama_fakultas,
                'alamat_mahasiswa' => $request->alamat_mahasiswa,
                'mr_awal' => $request->mr_awal,
                'mr_akhir' => $request->mr_akhir,
                'nip_ttd' => $request->nip_ttd,
                'user_create' => $request->user_create
                ]);
            return redirect()->route('surket.index')
                            ->with('success', 'Surat Keterangan Mahasiswa Aktif "'.$request->nim.'" berhasil dibuat');
        }
    }

    public function show($id)
    {
        //
    }

    public function peragaan()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            return view('surket.peragaan');
        }
    }

    public function raga()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            $cari = input::get('cari');
            $result = DB::SELECT("
                SELECT * FROM t_surket_mhs_aktif WHERE nim='$cari'");
           if($result == null){
                return redirect()->back()->with('error', 'Data Surat Keterangan Mahasiswa Aktif dengan NIM "'.input::get('cari').'" Tidak ditemukan');
            }else{
            return view('surket.peragaan', compact('result'));
            }
        }
    }

    public function rekap()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            return view('surket.rekap');
        }
    }

    public function rekapx()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            $cari = input::get('cari');
            $result = DB::SELECT("
                SELECT * FROM t_surket_mhs_aktif WHERE user_create LIKE '%$cari%'");
           if($result == null){
                return redirect()->back()->with('error', 'Data Pembuat Surat Yang anda cari tidak ditemukan');
            }else{
            $rekap = DB::SELECT("
                SELECT DISTINCT user_create, COUNT(nim) TotalNIM
                FROM t_surket_mhs_aktif
                WHERE user_create LIKE '%$cari%'
                GROUP BY user_create
                ");
            return view('surket.rekap', compact('rekap', 'result'));
            }
        }
    }

    public function edit($no_surat)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            $pejabat = DB::connection('mysql')->SELECT("SELECT nip,nama_pegawai FROM m_pejabat");

            $nomor = decrypt($no_surat);
            $results =DB::SELECT("SELECT * FROM t_surket_mhs_aktif LEFT JOIN m_pejabat ON t_surket_mhs_aktif.nip_ttd=m_pejabat.nip WHERE no_surat='$nomor'");
            return view('surket.edit', compact('results','pejabat'));
        }
    }

    public function updatex(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
                $surket = SurketAktif::find($request->no_surat);
                $surket->nim = $request->get('nim');
                $surket->nama_mahasiswa = $request->get('nama_mahasiswa');
                $surket->tempat_lahir_mahasiswa = $request->get('tempat_lahir_mahasiswa');
                $surket->tgl_lahir = $request->get('tgl_lahir');
                $surket->nama_program_studi = $request->get('nama_program_studi');
                $surket->nama_fakultas = $request->get('nama_fakultas');
                $surket->alamat_mahasiswa = $request->get('alamat_mahasiswa');
                $surket->mr_awal = $request->get('mr_awal');
                $surket->mr_akhir = $request->get('mr_akhir');
                $surket->nip_ttd = $request->get('nip_ttd');
                $surket->user_create = $request->get('user_create');
                $surket->save();
            return redirect()->route('surket.index')
                            ->with('success', 'Data berhasil di update');
        }
    }

    public function destroy($id)
    {
        //
    }

    public function print(Request $request,$no_surat)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $bulan = array("", "Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
            $hariini = date('d').' '.$bulan[date('n')].' '.date('Y');
                $id = decrypt($no_surat);
                $result = DB::SELECT(
                    "SELECT DISTINCT a.no_surat, a.nim, a.nama_mahasiswa, a.tempat_lahir_mahasiswa, a.tgl_lahir, a.nama_program_studi, a.nama_fakultas, a.alamat_mahasiswa, a.mr_awal, a.mr_akhir, b.nip, b.nama_pegawai, b.jabatan, b.sub_bagian
                    FROM t_surket_mhs_aktif a
                    LEFT JOIN m_pejabat b ON a.nip_ttd=b.nip
                    WHERE a.no_surat='$id'
                    ");
                $view  = \View::make('surket.cetak',['hariini' => $hariini ,'result' => $result])->render();
                $pdf   = \App::make('dompdf.wrapper');
                $pdf->loadHTML($view)->setPaper('a4', 'potrait');
                
                return $pdf->stream($id.".Pdf");  
        }  
    }

    public function hapus($nim)
    {
        $hapus = SurketAktif::where('nim',$nim)->first();
        if ($hapus != null ) {
            $hapus->delete();
            return back()->with('success', 'Data Berhasil dihapus!');
        }
       return redirect()->route('surket.raga')->with(['message'=> 'Wrong ID!!']);
        
    }
}
