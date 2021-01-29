<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\SertifikatAll;
use Carbon\Carbon;
use PDF;

class TutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('sertifikatall.index');
    }

    public function search()
    {
        $cari = Input::get('cari');
        $result = DB::SELECT(
            "SELECT a.id, a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
            FROM t_sertifikat_all a
            LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
            WHERE a.nim='$cari'
            ");
        if($result == null){
            return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Anda tidak terdaftar sebagai peserta Seminar');
        }else{
            return view('sertifikatall.index', compact('result'));
        }
    }

    public function create()
    {
        $sertifikat = DB::SELECT("SELECT * FROM m_sertifikat");

        return view('sertifikatall.create', compact('sertifikat'));
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kode_kegiatan' => 'required',
            'no_sertifikat' => 'required',
            'sebagai' => 'required',
            'tgl_pelaksanaan' => 'required',
            'tgl_sertifikat' => 'required',
            'tema' => 'required',
            'narasumber' => 'required',
            'lokasi' => 'required',
            'ttd_nip' => 'required'
        ]);
        SertifikatAll::create($request->all());
        return redirect()->route('sertifikat.create')
                        ->with('success', 'Data Baru berhasil dibuat');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $result = SertifikatAll::find(decrypt($id));
        return view('sertifikatall.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($nim)
    {
        $tutor = SertifikatAll::find($nim);
        $tutor->delete();
        return redirect()->route('sertifikat.index')
                        ->with('success', 'Data berhasil dihapus');
    }

    public function indexsearch()
    {
        return view('sertifikatall.indexsearch');
    }

    public function indexsearchx()
    {
        $cari = Input::get('cari');
         $result = DB::SELECT(
            "SELECT a.id,a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
            FROM t_sertifikat_all a
            LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
            WHERE a.kode_kegiatan='2403'
            AND a.nim='$cari'
            ");
        if($result == null){
            return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Anda tidak terdaftar sebagai peserta Seminar');
        }else{
            return view('sertifikatall.indexsearch', compact('result'));
        }
    }

    public function print(Request $request,$id)
    {
            $id = decrypt($id);
            $result = DB::SELECT(
                "SELECT a.id, a.no_sertifikat, a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai,a.tema,a.narasumber,a.lokasi,c.nip,c.nama_pegawai,c.sub_bagian
                FROM t_sertifikat_all a
                LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
                LEFT JOIN m_pejabat c ON a.ttd_nip=c.nip
                WHERE a.id='$id'
                ");
            $view  = \View::make('sertifikatall.cetak',['result' => $result])->render();
            $pdf   = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'landscape');
            
            return $pdf->stream($id.".Pdf");    
        
    }
}
