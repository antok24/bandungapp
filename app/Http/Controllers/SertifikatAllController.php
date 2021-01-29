<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\SertifikatAll;
use Carbon\Carbon;
use PDF;

class SertifikatAllController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form()
    {
    	$sertifikat = DB::SELECT("SELECT * FROM m_sertifikat");

        return view('sertifikatall.create', compact('sertifikat'));
    }

    public function simpan(Request $request)
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
        return redirect()->route('sertifikatall.form')
                        ->with('success', 'Data Baru berhasil dibuat');
    }

    public function peragaan()
    {
    	return view('sertifikatall.index');
    }

    public function cari(Request $request)
    {
    	$cari = $request->cari;
        $result = DB::SELECT(
            "SELECT a.id, a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai,a.narasumber
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

    public function peragaancetak()
    {
    	return view('sertifikatall.indexsearch');
    }

    public function caricetak(Request $request)
    {
    	$cari = $request->cari;
         $result = DB::SELECT(
            "SELECT a.id,a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai,a.narasumber
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

    public function edit($id)
    {
        $result = SertifikatAll::find(decrypt($id));
        return view('sertifikatall.create', compact('result'));
    }

    public function update(Request $request)
    {
    	date_default_timezone_set("Asia/Bangkok");
    	$request->validate([
            'nim' => 'required'
        ]);

    	$all = SertifikatAll::find($request->id);
    	$all->nim = $request->nim;
    	$all->nama = $request->nama;
    	$all->kode_kegiatan = $request->kode_kegiatan;
    	$all->no_sertifikat = $request->no_sertifikat;
    	$all->sebagai = $request->sebagai;
    	$all->tgl_pelaksanaan = $request->tgl_pelaksanaan;
    	$all->tgl_sertifikat = $request->tgl_sertifikat;
    	$all->tema = $request->tema;
    	$all->narasumber = $request->narasumber;
    	$all->lokasi = $request->lokasi;
    	$all->ttd_nip = $request->ttd_nip;
    	$all->save();
    	return redirect()->back()->with('success', 'Data Sertifikat Anda berhasil diperbarui');
    }

    public function delete($id)
    {    	
    	$hapus = SertifikatAll::find($id);
        $hapus->delete();
        return redirect(route('sertifikatall.peragaan'))->with('success','Data Berhasil dihapus!');
    }
}
