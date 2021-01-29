<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\SuratKeluar;
use Carbon\Carbon;
use PDF;
use File;

class SKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('suratkeluar.index');
    }

     public function search()
    {
        $cari = input::get('cari');
        $result = DB::SELECT("
            SELECT * FROM surat_keluar WHERE ( tujuan_kepada LIKE '%$cari%' OR no_surat LIKE '$cari' OR tujuan_alamat LIKE '%$cari%' OR perihal LIKE '%$cari%') ORDER BY created_at DESC");
        if($result == null){
            return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Nomor Surat Keluar Tidak Sesuai');
        }else{
            return view('suratkeluar.index', compact('result'));
        }
    }

    public function create()
    {
        $hasil = DB::SELECT("SELECT * FROM surat_keluar ORDER BY created_at DESC LIMIT 60");
        return view('suratkeluar.create', compact('hasil'));
    }

    public function store(request $request)
    {

    }

    public function simpan(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'no1' => 'required',
            'no2' => 'required',
            'no3' => 'required',
            'no4' => 'required',
            'tujuan_kepada' => 'required',
            'tujuan_alamat' => 'required',
            'perihal' => 'required',
            'lampiran' => 'required',
            'tgl_surat' => 'required',
            'file_sk' => 'mimes:pdf|max:2000',
            'user_create' => 'required'
        ]);

        // menyimpan fdata file yang di upload ke variabel $file
        $file = $request->file('file_sk');
        // menyimpan file dengan nama
        $tetap = 'file_surat_keluar';
        $nama_file = time()."_".$tetap."-".$file->getClientOriginalName();
        // isi dengan nama folder tempat kemana menyimpan file
        $tujuan_upload = 'file/surat_keluar';
        $file->move($tujuan_upload,$nama_file);

        SuratKeluar::create([
            'no_surat' => $request->no1."/".$request->no2."/".$request->no3."/".$request->no4,
            'tujuan_kepada' => $request->tujuan_kepada,
            'tujuan_alamat' => $request->tujuan_alamat,
            'perihal' => $request->perihal,
            'lampiran' => $request->lampiran,
            'tgl_surat' => $request->tgl_surat,
            'file_sk' => $nama_file,
            'user_create' => $request->user_create
            ]);
        return redirect()->route('sk.create')
                        ->with('success', 'Surat Keluar Baru berhasil dibuat');
    }

    public function editsk($no_surat)
    {
        $nosurat = decrypt($no_surat);
        $result = DB::SELECT("SELECT * FROM surat_keluar WHERE no_surat='$nosurat'");

        $hasil = DB::SELECT("SELECT * FROM surat_keluar ORDER BY no_surat DESC LIMIT 10");

        return view('suratkeluar.create', compact('result', 'hasil'));
    }

    public function updatesk(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'no_surat' => 'required',
            'tujuan_kepada' => 'required',
            'tujuan_alamat' => 'required',
            'perihal' => 'required',
            'lampiran' => 'required',
            'tgl_surat' => 'required',
            'file_sm' => 'mimes:file|max:2000',
            'user_create' => 'required'
        ]);

        // menyimpan fdata file yang di upload ke variabel $file
        $file = $request->file('file_sk');

        // menyimpan file dengan nama
        $tetap = 'file_surat_keluar';
        $nama_file = time()."_".$tetap."-".$file->getClientOriginalName();
        // isi dengan nama folder tempat kemana menyimpan file
        $tujuan_upload = 'file/surat_keluar';
        $file->move($tujuan_upload,$nama_file);

        $sk = SuratKeluar::find($request->no_surat);
        $sk->tujuan_kepada = $request->get('tujuan_kepada');
        $sk->tujuan_alamat = $request->get('tujuan_alamat');
        $sk->perihal = $request->get('perihal');
        $sk->lampiran = $request->get('lampiran');
        $sk->tgl_surat = $request->get('tgl_surat');
        $sk->file_sk = $nama_file;
        $sk->user_create = $request->get('user_create');
        $sk->save();
        return redirect()->route('sk.create')
                        ->with('success', 'Surat Keluar baru dengan nomor '.$request->no_surat.' berhasil di update');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function cetak()
    {
        return view('suratkeluar.index');
    }
}
