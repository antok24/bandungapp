<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\MPkbjj;
use Carbon\Carbon;
use PDF;

class MPkbjjController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{

            return view('pkbjj.index');
        }
    }

    public function search()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{
            $cari = Input::get('cari');
            $result = DB::SELECT(
                "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
                FROM m_sertifikat_pkbjj a
                LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
                WHERE a.nim='$cari'
                AND a.kode_kegiatan='2401'
                ");
            if($result == null){
                return redirect()->route('mpkbjj.index')->with('error', 'Data Yang anda cari tidak ditemukan, Mahaiswa tidak terdaftar sebagai peserta PKBJJ');
            }else{
                return view('pkbjj.index', compact('result'));
            }
        }            
    }

    public function create()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{
            return view('pkbjj.create');
        }
    }

    public function store(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $request->validate([
                'nim' => 'required',
                'nama' => 'required',
                'kode_kegiatan' => 'required',
                'no_sertifikat' => 'required',
                'sebagai' => 'required',
                'tgl_pelaksanaan' => 'required',
                'tgl_sertifikat' => 'required'
            ]);

            MPkbjj::create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'kode_kegiatan' => $request->kode_kegiatan,
                'no_sertifikat' => $request->no_sertifikat,
                'sebagai' => $request->sebagai,
                'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
                'tgl_sertifikat' => $request->tgl_sertifikat
                ]);
            return redirect()->route('mpkbjj.create')
                            ->with('success', 'Data Baru berhasil dibuat');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($nim)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{
            $result = MPkbjj::find(decrypt($nim));
            return view('pkbjj.edit', compact('result'));
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($nim)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{

            $pkbjj = MPkbjj::find($nim);
            $pkbjj->delete();
            return redirect()->route('mpkbjj.index')
                            ->with('success', 'Data berhasil dihapus');
        }
    }

    public function indexsearch()
    {
        return view('pkbjj.indexsearch');
    }

    public function indexsearchx()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{
            $cari = Input::get('cari');
             $result = DB::SELECT(
                "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
                FROM m_sertifikat_pkbjj a
                LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
                WHERE a.kode_kegiatan='2401'
                AND a.nim='$cari'
                ");
            if($result == null){
                return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Mahaiswa tidak terdaftar sebagai peserta PKBJJ');
            }else{
                return view('pkbjj.indexsearch', compact('result'));
            }
        }  
    }

    public function print(Request $request,$nim)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2){
            abort(403);
        }else{
            $id = decrypt($nim);
            $result = DB::SELECT(
                "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
                FROM m_sertifikat_pkbjj a
                LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
                WHERE a.nim='$id'
                ");
            $view  = \View::make('pkbjj.cetak',['result' => $result])->render();
            $pdf   = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'landscape');
            
            return $pdf->stream($id.".Pdf");    
        }
    }
}
