<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\MPkbjj;
use App\Osmb;
use App\Tutor;
use App\SertifikatAll;
use App\SertifikatKegiatan;
use App\TTMATPEM;
use Carbon\Carbon;
use PDF;

class FrontController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function indexpkbjj()
    {
        return view('front.pkbjjfront');
    }

    public function indexsearchx()
    {
        $cari = Input::get('cari');
         $result = DB::SELECT(
            "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
            FROM m_sertifikat_pkbjj a
            LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
            WHERE a.kode_kegiatan='2401'
            AND a.nim='$cari'
            ");
        if($result == null){
                 return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Anda tidak mengikuti kegiatan PKBJJ atau jika anda mengikuti kegiatan ini tapi data anda tidak ditemukan silahkan lapor ke UPBJJ UT Bandung');
            }else{
                return view('front.pkbjjfront', compact('result'))->with('success','Selamat !!! Data yang anda cari berhasil ditemukan, silahkan cetak E-Sertifikat anda');
            }
    }

    public function printpkbjj(Request $request,$nim)
    {
            $id = decrypt($nim);
            $result = DB::SELECT(
                "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
                FROM m_sertifikat_pkbjj a
                LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
                WHERE a.nim='$id'
                ");
            $view  = \View::make('front.cetakpkbjj',['result' => $result])->render();
            $pdf   = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'landscape');
            
            return $pdf->stream($id.".Pdf");    
        
    }

    public function indexosmb()
    {
        return view('front.osmbfront');
    }

    public function indexsearchosmbx()
    {
        $cari = Input::get('cari');
         $result = DB::SELECT(
            "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
            FROM m_sertifikat_osmb a
            LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
            WHERE a.kode_kegiatan='2402'
            AND a.nim='$cari'
            ");
        return view('front.osmbfront', compact('result'));
    }

    public function printosmb(Request $request,$nim)
    {
            $id = decrypt($nim);
            $result = DB::SELECT(
                "SELECT a.nim, a.nama, a.kode_kegiatan, b.nama_kegiatan, a.no_sertifikat, a.tgl_pelaksanaan, a.tgl_sertifikat, a.sebagai
                FROM m_sertifikat_osmb a
                LEFT JOIN m_sertifikat b ON a.kode_kegiatan=b.kode_sertifikat
                WHERE a.nim='$id'
                ");
            $view  = \View::make('front.cetakosmb',['result' => $result])->render();
            $pdf   = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'landscape');
            
            return $pdf->stream($id.".Pdf");    
        
    }

    public function indexkegiatan()
    {
        return view('front.kegiatanfront');
    }

    public function indexkegiatansearch(Request $request)
    {
        $cari = $request->cari;
         $result = DB::SELECT(
            "SELECT *
            FROM t_sertifikat_all
            LEFT JOIN m_sertifikat ON t_sertifikat_all.kode_kegiatan=m_sertifikat.kode_sertifikat
            WHERE (nim LIKE '%$cari%' OR nama LIKE '%$cari%')
            ");
        if($result == null){
                 return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Anda Tidak Mengikuti Kegiatan ini');
            }else{
                return view('front.kegiatanfront', compact('result'));
            }
    }

    public function printkegiatan(Request $request,$id)
    {
            $idd = decrypt($id);
            $result = DB::SELECT(
                "SELECT *
                FROM t_sertifikat_all
                LEFT JOIN m_sertifikat ON t_sertifikat_all.kode_kegiatan=m_sertifikat.kode_sertifikat
                LEFT JOIN m_pejabat ON t_sertifikat_all.ttd_nip=m_pejabat.nip
                WHERE id='$idd'
                ");
            $view  = \View::make('front.cetakkegiatan',['result' => $result])->render();
            $pdf   = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'landscape');
            
            return $pdf->stream($id.".Pdf");    
        
    }

    public function indexbahanajar()
    {
        $result = DB::connection('mysql3')->SELECT("SELECT * FROM v_stok_upbjj WHERE kode_agen='24'");

        return view('front.ba', compact('result'));
    }

    public function indexttmatpem(Request $result)
    {
        if($result){
                 return view('front.ttmatpem');
            }else{
                return redirect()->back()->with('error', 'Untuk sementara anda tidak berhak mengakses halaman ini, silahkan kontak Universitas Terbuka Bandung');
            }
    }

    public function carittmatpem(Request $request)
    {
        $cari = $request->cari;
         $result = DB::connection('mysql2')->SELECT(
                "SELECT DISTINCT a.nim, a.nama_mahasiswa, a.tempat_lahir_mahasiswa,a.kode_program_studi,
                  b.nama_program_studi
                  FROM m_data_pribadi a 
                  LEFT JOIN m_program_studi b ON a.kode_program_studi=b.kode_program_studi
                  LEFT JOIN m_fakultas c ON b.kode_fakultas=c.kode_fakultas
                  WHERE a.kode_upbjj='24'
                  AND a.kode_status_dp='DA' 
                  AND a.nim='$cari'
                ");
        if($result == null){
                 return redirect()->back()->with('error', 'Data Yang anda cari tidak ditemukan, Silahkan masukkan Nomor Induk Mahasiswa');
            }else{
                return view('front.ttmatpem', compact('result'));
            }
    }

    public function simpan(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
            $input =$request->all();
            $aturan = array(
                'masa' => 'required',
                'nim' => 'required',
                'nama_mahasiswa' => 'required',
                'kode_mtk' => 'required',
                'kode_prodi' => 'required',
                'semester' => 'required',
                'nama_program_studi' => 'required',
                'nomor_hp' => 'required',
                'lokasi' => 'required'
            );

            $validator = Validator::make($input,$aturan);
            if($validator->fails()){
                return redirect()->route('ttm-atpem.cari')->with('error', 'NIM  "'.$request->nim.'" dengan Nama "'.$request->nama_mahasiswa.'" sudah pernah dibuatkan surat keterangan mahasiswa aktif, silahkan cek diperagaan');
            }
            TTMATPEM::create([
                'masa' => $request->masa,
                'nim' => $request->nim,
                'nama_mahasiswa' => $request->nama_mahasiswa,
                'kode_mtk' => $request->kode_mtk,
                'nama_program_studi' => $request->nama_program_studi,
                'kode_prodi' => $request->kode_prodi,
                'semester' => $request->semester,
                'nomor_hp' => $request->nomor_hp,
                'lokasi' => $request->lokasi
                ]);
            return redirect()->route('ttm-atpem.index')
                            ->with('success', '"'.$request->nama_mahasiswa.'", Anda berhasil mengisi formulir pengajuan TTM ATPEM, silahkan menunggu konfirmasi dari kami (Universitas Terbuka Bandung) yang akan kami sampaikan melalui message ke nomor hp yang telah anda berikan, atau anda bisa kunjungi website resmi universitas terbuka bandung di www.bandung.ut.ac.id');
    }
}
