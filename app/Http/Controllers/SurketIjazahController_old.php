<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\SurketIjazah;
use PDF;

class SurketIjazahController extends Controller
{
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
            $tampil = DB::SELECT("SELECT DISTINCT * FROM t_surket_ijazah ORDER BY no_surat DESC LIMIT 3");
            return view('surketijazah.index', compact('tampil'));
        }
    }

    public function search()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $tetap = 'UN31.UPBJJ.15/PK.06.04';
            $kode = $tetap.'/'.date('Y');

            $cari = Input::get('cari');
            $result = DB::connection('mysql2')->SELECT(
                "SELECT DISTINCT a.nim, b.nama_mahasiswa, c.nama_program_studi, c.kode_program_studi, d.singkatan, d.nama_fakultas,
                b.masa_registrasi_awal, b.masa_registrasi_akhir, f.nama_pendidikan_akhir, a.sks_yudisium,
                a.no_ijazah_d, a.no_ijazah_a, a.nomor_sk_rektor, e.tanggal_sk
                FROM t_yudisium a
                LEFT JOIN m_data_pribadi b ON a.nim=b.nim
                LEFT JOIN m_program_studi c ON b.kode_program_studi=c.kode_program_studi
                LEFT JOIN m_fakultas d ON c.kode_fakultas=d.kode_fakultas
                LEFT JOIN m_sk_rektor e ON a.nomor_sk_rektor=e.nomor_sk_rektor
                LEFT JOIN m_pendidikan_akhir f ON b.kode_pendidikan_akhir=f.kode_pendidikan_akhir
                WHERE b.kode_upbjj='24'
                AND a.nim='$cari'
                ORDER BY a.nim DESC LIMIT 1
                ");
            if($result == null){
                return redirect()->route('surketijazah.index')->with('error', 'Data Yang anda cari tidak ditemukan, mungkin mahasiswa tersebut belum Lulus');
            }else{
                return view('surketijazah.index', compact('result', 'kode'));
            }
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $input =$request->all();
            $aturan = array(
                'nim' => 'required|unique:t_surket_ijazah',
            );

            $validator = Validator::make($input,$aturan);
            if($validator->fails()){
                return redirect()->route('surketijazah.index')->with('error', 'NIM  "'.$request->nim.'" dengan Nama "'.$request->nama_mahasiswa.'" sudah pernah dibuatkan Surat Konfirmasi Ijazah, silahkan cek diperagaan');
            }
            SurketIjazah::create([
                'nim' => $request->nim,
                'nama_mahasiswa' => $request->nama_mahasiswa,
                'no_surat' => $request->no1.'/'.$request->no2,
                'nama_instansi' => $request->nama_instansi,
                'kota_instansi' => $request->kota_instansi,
                'kode_program_studi' => $request->kode_program_studi,
                'nama_program_studi' => $request->nama_program_studi,
                'singkatan' => $request->singkatan,
                'nama_fakultas' => $request->nama_fakultas,
                'nama_pendidikan_akhir' => $request->nama_pendidikan_akhir,
                'no_ijazah_d' => $request->no_ijazah_d,
                'no_ijazah_a' => $request->no_ijazah_a,
                'sks_yudisium' => $request->sks_yudisium,
                'nomor_sk_rektor' => $request->nomor_sk_rektor,
                'tanggal_sk' => $request->tanggal_sk,
                'masa_registrasi_awal' => $request->masa_registrasi_awal,
                'masa_registrasi_akhir' => $request->masa_registrasi_akhir
                ]);
            return redirect()->route('surketijazah.index')
                            ->with('success', 'Data Baru berhasil dibuat');
        }
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

    public function raga()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            return view('surketijazah.peragaan');
        }
    }

    public function ragax()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            $cari = Input::get('cari');
            $result = DB::SELECT("
                SELECT DISTINCT no_surat,nim,nama_mahasiswa,kode_program_studi,nama_program_studi
                FROM t_surket_ijazah 
                WHERE nim='$cari'");
            return view('surketijazah.peragaan', compact('result'));
        }
    }

    public function print(Request $request,$nim)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 5 && $LotusX != 6){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $bulan = array("", "Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
            $hariini = date('d').' '.$bulan[date('n')].' '.date('Y');

            $id = decrypt($nim);
            $result = DB::SELECT(
                    "SELECT DISTINCT a.nim, a.nama_mahasiswa, a.no_surat, a.nama_instansi, a.kota_instansi, a.nama_program_studi, a.kode_program_studi, a.singkatan, a.nama_fakultas, a.masa_registrasi_awal, a.masa_registrasi_akhir, a.nama_pendidikan_akhir, a.sks_yudisium, a.no_ijazah_d, a.no_ijazah_a, a.nomor_sk_rektor, a.tanggal_sk, b.nomor_sk_ban_pt, b.peringkat, b.tgl_mulai_sk, b.tgl_akhir_sk
                    FROM t_surket_ijazah a
                    LEFT JOIN sk_ban_pt b ON a.kode_program_studi=b.kode_program_studi
                    WHERE a.nim='$id'
                    ORDER BY a.nim DESC LIMIT 1
                    ");
            $view  = \View::make('surketijazah.cetak',['hariini' => $hariini ,'result' => $result])->render();
            $pdf   = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'potrait');
                
            return $pdf->stream($id.".Pdf");    
        }
    }
}
