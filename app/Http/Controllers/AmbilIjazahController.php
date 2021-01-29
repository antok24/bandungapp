<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Ijazah;
use Carbon\Carbon;
use PDF;

class AmbilIjazahController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $tampil = DB::SELECT("
                SELECT DISTINCT a.nim,a.kode_program_studi,b.nama_program_studi,a.nomor_sk_rektor,b.nama_mahasiswa,b.tgl_lahir,b.tempat_lahir,a.tgl_terima,a.no_urut_penyimpanan,a.penyimpanan,a.proses_penyerahan,a.tgl_penyerahan_ke_mhs,a.no_ijazah_d,a.no_ijazah_a,a.pengambil,a.menyerahkan,a.srt_kuasa
                FROM t_ijazah a
                LEFT JOIN t_foto_ijazah b ON a.nim=b.nim
                ORDER BY nim DESC LIMIT 10");
            return view('ijazahambil.create', compact('tampil'));
        }
    }

    public function search()
    {
        date_default_timezone_set("Asia/Bangkok");
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $hariini = date('d').'-'.date('m').'-'.date('Y');
            $cari = Input::get('cari');
            $result = DB::SELECT("
                SELECT a.nim, b.nama_mahasiswa, b.tempat_lahir, b.tgl_lahir, b.nomor_hp, b.kode_kabko,a.kode_kabko_pokjar,a.kode_program_studi,b.nama_program_studi,b.alamat_mahasiswa,b.nik,a.no_ijazah_d,a.no_ijazah_a, a.nomor_sk_rektor, a.status_ijazah, a.status_transkrip_nilai, a.status_pendamping_ijazah, a.status_ijazah_akta, a.no_urut_penyimpanan, a.penyimpanan,a.amplop
                FROM t_ijazah a 
                LEFT JOIN t_foto_ijazah b ON a.nim=b.nim
                WHERE a.nim='$cari'
                ");
            if($result == null){
                return redirect()->route('take-ijazah.create')->with('error', 'Data Yang anda cari tidak ditemukan, Ijazah belum di terima upbjj');
            }else{
                return view('ijazahambil.create', compact('result', 'hariini'));
            }
        }
    }

    public function updatex(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
                $ijzambil = Ijazah::find($request->nim);
                $ijzambil->tgl_penyerahan_ke_mhs = $request->get('tgl_penyerahan_ke_mhs');
                $ijzambil->proses_penyerahan = $request->get('proses_penyerahan');
                $ijzambil->pengambil = $request->get('pengambil');
                $ijzambil->menyerahkan = $request->get('menyerahkan');
                $ijzambil->srt_kuasa = $request->get('srt_kuasa');
                $ijzambil->save();
            return redirect()->route('take-ijazah.create')
                            ->with('success', 'Data berhasil di simpan/update');
        }
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
}
