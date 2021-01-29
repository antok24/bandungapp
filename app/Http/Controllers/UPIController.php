<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\UPI;
use App\Ijazah;
use App\FotoIjazah;
use Carbon\Carbon;

class UPIController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function buatupi()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
           $tampil = DB::table('t_upi')
                        ->leftjoin('t_ijazah','t_upi.nim','=','t_ijazah.nim')
                        ->leftjoin('t_foto_ijazah', 't_foto_ijazah.nim', '=', 't_upi.nim')
                        ->select('t_upi.*','t_ijazah.status_ijazah', 't_ijazah.status_transkrip_nilai', 't_foto_ijazah.status_foto', 't_foto_ijazah.tgl_terima', 't_foto_ijazah.tgl_kirim_ke_pusat')->get();
            return view('upi.create', ['tampil'=> $tampil]);
        }
    }

    public function search()
    {
        date_default_timezone_set("Asia/Bangkok");
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
            $hariini = date('d').'-'.date('m').'-'.date('Y');
            $cari = Input::get('cari');
            $result = DB::SELECT("
                SELECT a.nim, a.nama_mahasiswa, a.tempat_lahir, a.tgl_lahir, a.nomor_hp, a.kode_kabko,a.kode_kabko_pokjar,a.kode_program_studi,a.nama_program_studi,a.alamat_mahasiswa,a.status_foto, a.nik,b.no_ijazah_d,b.no_ijazah_a, a.nomor_sk_rektor, b.status_ijazah, b.status_transkrip_nilai, b.status_pendamping_ijazah, b.status_ijazah_akta, b.no_urut_penyimpanan, b.penyimpanan, c.status, b.amplop
                FROM t_foto_ijazah a 
                LEFT JOIN t_ijazah b ON a.nim=b.nim
                LEFT JOIN m_status c ON a.status_foto=c.id
                WHERE b.proses_penyerahan IS NULL 
                AND a.nim='$cari'
                ");
            $nomor = DB::SELECT("SELECT nomor_sk_upi, status_sk FROM t_sk_upi WHERE status_sk='1'");

            if($result == null){
                return redirect()->route('upi.pendaftaran')->with('error', 'Data Yang anda cari tidak ditemukan, Ijazah belum di terima upbjj / mungkin sudah diambil Wisuda silahkan cek di peragaan');
            }else{
                return view('upi.create', compact('result', 'hariini', 'nomor'));
            }
        }
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
            $request->validate([
                'nim' => 'required',
                'nomor_sk_upi' => 'required',
                'tgl_pendaftaran' => 'required',
                'user_create' => 'required'
            ]);

            UPI::create([
                'nim' => $request->nim,
                'nomor_sk_upi' => $request->nomor_sk_upi,
                'tgl_pendaftaran' => $request->tgl_pendaftaran,
                'user_create' => $request->user_create
                ]);
            return redirect()->route('upi.pendaftaran')->with('success', 'Peserta UPI berhasil di daftarkan');
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

    public function peragaan()
    {
        return view('upi.peragaan');
    }

    public function cari()
    {
        date_default_timezone_set("Asia/Bangkok");
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
            $cari = Input::get('cari');
            $result = DB::SELECT("
                SELECT a.nim, a.nama_mahasiswa, a.tempat_lahir, a.tgl_lahir, a.nomor_hp, a.kode_kabko,a.kode_kabko_pokjar,a.kode_program_studi,a.nama_program_studi,a.alamat_mahasiswa,a.status_foto, a.nik,b.no_ijazah_d,b.no_ijazah_a, a.nomor_sk_rektor, b.status_ijazah, b.status_transkrip_nilai, b.status_pendamping_ijazah, b.status_ijazah_akta, b.no_urut_penyimpanan, b.penyimpanan, c.status, b.amplop, b.proses_penyerahan,b.tgl_penyerahan_ke_mhs, b.pengambil
                FROM t_foto_ijazah a 
                LEFT JOIN t_ijazah b ON a.nim=b.nim
                LEFT JOIN m_status c ON a.status_foto=c.id
                AND a.nim='$cari'
                LIMIT 1
                ");

            if($result == null){
                return redirect()->route('upi.peragaan')->with('error', 'Data Yang anda cari tidak ditemukan');
            }else{
                return view('upi.peragaan', compact('result'));
            }
        }
    }
}
