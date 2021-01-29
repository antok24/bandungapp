<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\FotoIjazah;
use Carbon\Carbon;
use PDF;

class FotoIjazahController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            return view('fotoijazah.index');
        }
    }

    public function peragaan()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $cari = Input::get('cari');
            $result = DB::SELECT("
                SELECT nim,nama_mahasiswa,tempat_lahir,tgl_lahir,kode_program_studi,nama_program_studi ,nomor_sk_rektor,tanggal_sk,status_foto,tgl_terima
                FROM t_foto_ijazah
                WHERE nim='$cari'
                ");
            if($result == null){
                return redirect()->route('fotoijazah.index')->with('error', 'NIM "'.Input::get('cari').'" Belum Menyerahkan Foto Ke UPBJJ');
            }else{
                return view('fotoijazah.index', compact('result'));
            }
        }
    }

    public function create()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $tampil = DB::SELECT("SELECT DISTINCT nim,nama_mahasiswa,tempat_lahir,tgl_lahir,kode_program_studi,nama_program_studi,nomor_sk_rektor,tanggal_sk, ipk, tgl_terima FROM t_foto_ijazah ORDER BY created_at DESC LIMIT 10");
            return view('fotoijazah.create', compact('tampil'));
        }
    }

    public function search()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $hariini = date('d').'-'.date('m').'-'.date('Y');

            $cari = Input::get('cari');
            $result = DB::connection('mysql2')->SELECT(
                "SELECT DISTINCT a.nim, b.nik, b.nama_mahasiswa, b.alamat_mahasiswa, b.tempat_lahir_mahasiswa, b.tanggal_lahir_mahasiswa, b.nomor_hp_mahasiswa, b.kode_kabko, g.kode_kabko_pokjar, g.alamat_pokjar, c.nama_program_studi, c.kode_program_studi, d.nama_fakultas,
                a.no_ijazah_d, a.no_ijazah_a, a.nomor_sk_rektor, a.no_surat, a.ipk_yudisium, e.tanggal_sk
                FROM t_yudisium a
                LEFT JOIN m_data_pribadi b ON a.nim=b.nim
                LEFT JOIN m_program_studi c ON b.kode_program_studi=c.kode_program_studi
                LEFT JOIN m_fakultas d ON c.kode_fakultas=d.kode_fakultas
                LEFT JOIN m_sk_rektor e ON a.nomor_sk_rektor=e.nomor_sk_rektor
                LEFT JOIN m_data_pribadi_pendukung_p g ON b.nim=g.nim
                WHERE b.kode_upbjj='24'
                AND a.nim='$cari'
                ORDER BY a.nim DESC LIMIT 1
                ");
            if($result == null){
                return redirect()->route('fotoijazah.create')->with('error', 'Data Yang anda cari tidak ditemukan, mungkin mahasiswa tersebut belum ter Yudisium atau belum Lulus, silahkan Laporkan ke ICT');
            }else{
                return view('fotoijazah.create', compact('result', 'hariini'));
            }
        }
    }

    public function store(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $input=$request->all();
            $aturan=array(
                'nim' => 'required|unique:t_foto_ijazah',
            );

            $validator = Validator::make($input,$aturan);
            if($validator->fails()){
                return redirect()->route('fotoijazah.create')->with('error', 'NIM '.$request->nim.', dengan nama '.$request->nama_mahasiswa.' sudah mengirim Foto ke Kantor UPBJJ UT Bandung, Silahkan cek di menu Peragaan');
            }

            FotoIjazah::create([
                'nim' => $request->nim,
                'nik' => $request->nik,
                'nama_mahasiswa' => $request->nama_mahasiswa,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'nomor_hp' => $request->nomor_hp,
                'kode_kabko' => $request->kode_kabko,
                'alamat_mahasiswa' => $request->alamat_mahasiswa,
                'kode_kabko_pokjar' => $request->kode_kabko_pokjar,
                'alamat_pokjar' => $request->alamat_pokjar,
                'kode_program_studi' => $request->kode_program_studi,
                'nama_program_studi' => $request->nama_program_studi,
                'nama_fakultas' => $request->nama_fakultas,
                'no_ijazah_d' => $request->no_ijazah_d,
                'no_ijazah_a' => $request->no_ijazah_a,
                'nomor_sk_rektor' => $request->nomor_sk_rektor,
                'tanggal_sk' => $request->tanggal_sk,
                'ipk' => $request->ipk,
                'status_foto' => $request->status_foto,
                'tgl_terima' => $request->tgl_terima,
                'tgl_kirim_ke_pusat' => $request->tgl_kirim_ke_pusat,
                'user_create' => $request->user_create
                ]);
            return redirect()->route('fotoijazah.create')
                            ->with('success', 'Data Penyerahan Foto Yudisium berhasil disimpan');
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

    public function print(Request $request,$nim)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $bulan = array("", "Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
            $hariini = date('d').' '.$bulan[date('n')].' '.date('Y');
                $id = decrypt($nim);
                $result = DB::SELECT(
                    "SELECT * FROM t_foto_ijazah WHERE nim='$id'
                    ");
                $view  = \View::make('fotoijazah.cetak',['hariini' => $hariini ,'result' => $result])->render();
                $pdf   = \App::make('dompdf.wrapper');
                $pdf->loadHTML($view)->setPaper('a4', 'potrait');
                
                return $pdf->stream($id.".Pdf");
        }    
    }

    public function rekap()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $sk = DB::SELECT("SELECT nomor_sk_rektor FROM t_foto_ijazah GROUP BY nomor_sk_rektor");
            return view('fotoijazah.rekapfotoijazah', compact('sk'));
        }
    }

    public function rekapsearch()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $sk = DB::SELECT("SELECT nomor_sk_rektor FROM t_foto_ijazah GROUP BY nomor_sk_rektor");
            $cari = Input::get('cari');
            $result = DB::SELECT(
                "SELECT DISTINCT nomor_sk_rektor, COUNT(nim) TotalNIM
                FROM t_foto_ijazah
                WHERE nomor_sk_rektor='$cari'
                GROUP BY nomor_sk_rektor
                ");
            $terkirim = DB::SELECT(
                "SELECT DISTINCT nomor_sk_rektor, COUNT(nim) TotalNIM
                FROM t_foto_ijazah
                WHERE nomor_sk_rektor='$cari'
                AND tgl_kirim_ke_pusat IS NOT NULL
                GROUP BY nomor_sk_rektor
                ");
            $belum = DB::SELECT(
                "SELECT DISTINCT nomor_sk_rektor, COUNT(nim) TotalNIM
                FROM t_foto_ijazah
                WHERE nomor_sk_rektor='$cari'
                AND tgl_kirim_ke_pusat IS NULL
                GROUP BY nomor_sk_rektor
                ");
            $results = DB::SELECT(
                "SELECT nim,nama_mahasiswa,tgl_terima,nomor_sk_rektor
                FROM t_foto_ijazah
                WHERE nomor_sk_rektor='$cari'
                ORDER BY tgl_terima DESC LIMIT 13
                ");
            return view('fotoijazah.rekapfotoijazah', compact('result', 'results', 'terkirim','belum','sk'));
        }
    }

    public function kirimindex()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $sk = DB::SELECT(
                "SELECT nomor_sk_rektor
                FROM t_foto_ijazah
                WHERE tgl_kirim_ke_pusat IS NULL 
                GROUP BY nomor_sk_rektor");
            return view('fotoijazah.kirim', compact('sk'));
        }
    }

    public function kirimsearch()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $sk = DB::SELECT(
                "SELECT nomor_sk_rektor
                FROM t_foto_ijazah
                WHERE tgl_kirim_ke_pusat IS NULL 
                GROUP BY nomor_sk_rektor");
            $cari = Input::get('cari');
            $result = DB::SELECT(
                "SELECT nim,nama_mahasiswa,tgl_terima,nomor_sk_rektor,kode_program_studi,nama_program_studi
                FROM t_foto_ijazah
                WHERE nomor_sk_rektor='$cari'
                ORDER BY tgl_terima DESC LIMIT 50
                ");
            $belum = DB::SELECT(
                "SELECT COUNT(nim) TotalNIM
                FROM t_foto_ijazah
                WHERE nomor_sk_rektor='$cari'
                AND tgl_kirim_ke_pusat IS NULL
                GROUP BY nomor_sk_rektor
                ");
            return view('fotoijazah.kirim', compact('result', 'sk', 'belum'));
        }
    }
}
