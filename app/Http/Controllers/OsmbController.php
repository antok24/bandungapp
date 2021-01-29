<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Osmb;
use Carbon\Carbon;
use PDF;
class OsmbController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('osmb.index');
    }

    public function search()
    {
        $cari = Input::get('cari');
        $result = DB::SELECT(
            "SELECT a.nim, a.nama, a.program_studi, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
            FROM m_sertifikat_osmb a
            LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
            WHERE a.nim='$cari'
            AND a.kode_kegiatan='2402'
            ");
        if($result == null){
            return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Mahaiswa tidak terdaftar sebagai peserta OSMB');
        }else{
            return view('osmb.index', compact('result'));
        }  
    }

    public function create()
    {
        return view('osmb.create');
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'program_studi' => 'required',
            'kode_kegiatan' => 'required',
            'no_sertifikat' => 'required',
            'sebagai' => 'required',
            'tgl_pelaksanaan' => 'required',
            'tgl_sertifikat' => 'required'
        ]);

        Osmb::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'program_studi' => $request->program_studi,
            'kode_kegiatan' => $request->kode_kegiatan,
            'no_sertifikat' => $request->no_sertifikat,
            'sebagai' => $request->sebagai,
            'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
            'tgl_sertifikat' => $request->tgl_sertifikat
            ]);
        return redirect()->route('osmb.create')
                        ->with('success', 'Data Baru berhasil dibuat');
    }

    public function show($id)
    {
        //
    }

    public function edit($nim)
    {
        $result = Osmb::find(decrypt($nim));
        return view('osmb.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($nim)
    {
        $osmb = Osmb::find($nim);
        $osmb->delete();
        return redirect()->route('osmb.index')
                        ->with('success', 'Data berhasil dihapus');
    }

    public function indexsearch()
    {
        return view('osmb.indexsearch');
    }

    public function indexsearchx()
    {
        $cari = Input::get('cari');
         $result = DB::SELECT(
            "SELECT a.nim, a.nama, a.program_studi, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
            FROM m_sertifikat_osmb a
            LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
            WHERE a.kode_kegiatan='2402'
            AND a.nim='$cari'
            ");
        if($result == null){
            return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Mahaiswa tidak terdaftar sebagai peserta OSMB');
        }else{
            return view('osmb.indexsearch', compact('result'));
        }
    }

    public function print(Request $request,$nim)
    {
            $id = decrypt($nim);
            $result = DB::SELECT(
                "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
                FROM m_sertifikat_osmb a
                LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
                WHERE a.nim='$id'
                ");
            $view  = \View::make('osmb.cetak',['result' => $result])->render();
            $pdf   = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'landscape');
            
            return $pdf->stream($id.".Pdf");    
        
    }
}
