<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Ijazah;
use Carbon\Carbon;
use PDF;

class IjazahController extends Controller
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
            return view('ijazah.index');
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
                SELECT a.nim,b.nama_mahasiswa,b.tempat_lahir,b.tgl_lahir,a.nomor_sk_rektor,b.kode_program_studi,b.nama_program_studi,b.tanggal_sk,a.status_ijazah,a.status_transkrip_nilai,a.status_ijazah_akta,a.status_pendamping_ijazah,a.no_ijazah_d, a.no_ijazah_a, a.no_urut_penyimpanan,a.penyimpanan, c.status, a.proses_penyerahan,a.tgl_penyerahan_ke_mhs,a.srt_kuasa,a.pengambil
                FROM t_ijazah a
                LEFT JOIN t_foto_ijazah b ON a.nim=b.nim
                LEFT JOIN m_status c ON b.status_foto=c.id
                WHERE a.nim='$cari'
                ");
            if($result == null){
                return redirect()->route('ijazah.index')->with('error', 'NIM "'.Input::get('cari').'" Ijazah belum ada di UPBJJ');
            }else{
                return view('ijazah.index', compact('result'));
            }
        }
    }

    public function create()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7){
            abort(403);
        }else{
            $tampil = DB::SELECT("
                SELECT DISTINCT a.nim,a.kode_program_studi,b.nama_program_studi,a.nomor_sk_rektor,b.nama_mahasiswa,b.tgl_lahir,b.tempat_lahir,a.tgl_terima,a.no_urut_penyimpanan,a.penyimpanan
                FROM t_ijazah a
                LEFT JOIN t_foto_ijazah b ON a.nim=b.nim
                ORDER BY nim DESC LIMIT 10");
            return view('ijazah.create', compact('tampil'));
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

            $nomor = \App\Ijazah::max('no_urut_penyimpanan');
            $nomora = $nomor+1;
            $nomorurut = sprintf("%04s", $nomora);

            $cari = Input::get('cari');
            $result = DB::SELECT("
                SELECT nim, nama_mahasiswa,tempat_lahir,tgl_lahir,nomor_hp,kode_kabko,kode_kabko_pokjar,kode_program_studi,nama_program_studi,alamat_mahasiswa,nik,no_ijazah_d,no_ijazah_a, nomor_sk_rektor, status_foto, tanggal_sk
                FROM t_foto_ijazah
                WHERE nim='$cari'
                ");
            if($result == null){
                return redirect()->route('ijazah.create')->with('error', 'Data Yang anda cari tidak ditemukan, mungkin mahasiswa tersebut belum menyerahkan foto, silahkan cek data penyerahan foto ijazah');
            }else{
                return view('ijazah.create', compact('result', 'hariini', 'nomorurut'));
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
                'nim' => 'required|unique:t_ijazah',
            );

            $validator = Validator::make($input,$aturan);
            if($validator->fails()){
                return redirect()->route('ijazah.create')->with('error', 'NIM '.$request->nim.' ijazah sudah pernah di inputkan, silahkan cek di menu peragaan');
            }
            
                Ijazah::create([
                'nim' => $request->nim,
                'kode_kabko' => $request->kode_kabko,
                'kode_kabko_pokjar' => $request->kode_kabko_pokjar,
                'kode_program_studi' => $request->kode_program_studi,
                'no_ijazah_d' => $request->no_ijazah_d,
                'no_ijazah_a' => $request->no_ijazah_a,
                'nomor_sk_rektor' => $request->nomor_sk_rektor,
                'status_ijazah' => $request->status_ijazah,
                'status_transkrip_nilai' => $request->status_transkrip_nilai,
                'status_pendamping_ijazah' => $request->status_pendamping_ijazah,
                'status_ijazah_akta' => $request->status_ijazah_akta,
                'tgl_terima' => $request->tgl_terima,
                'tgl_penyerahan_ke_mhs' => $request->tgl_penyerahan_ke_mhs,
                'proses_penyerahan' => $request->proses_penyerahan,
                'no_urut_penyimpanan' => $request->no_urut_penyimpanan,
                'amplop' => $request->amplop,
                'penyimpanan' => $request->penyimpanan,
                'user_create' => $request->user_create
                ]);
            return redirect()->route('ijazah.create')->with('success', 'Data Ijazah Masuk berhasil disimpan');

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

    public function bukubesar()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
            $sk = DB::SELECT("SELECT nomor_sk_rektor FROM t_foto_ijazah GROUP BY nomor_sk_rektor");
            return view('ijazah.bukubesar', compact('sk'));
        }
    }

    public function bbsearch()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
            $sk = DB::SELECT("SELECT nomor_sk_rektor FROM t_foto_ijazah GROUP BY nomor_sk_rektor");
            $cari = Input::get('cari');
            $result = DB::SELECT("
                SELECT a.nim, a.nama_mahasiswa, a.nomor_sk_rektor, a.tempat_lahir, a.tgl_lahir, a.nomor_hp, a.kode_kabko,a.kode_kabko_pokjar,a.kode_program_studi,a.nama_program_studi,a.alamat_mahasiswa,a.status_foto, a.nik,a.no_ijazah_d,a.no_ijazah_a, a.nomor_sk_rektor, b.status_ijazah, b.status_transkrip_nilai, b.status_pendamping_ijazah, b.status_ijazah_akta, b.no_urut_penyimpanan, b.penyimpanan, c.status, b.amplop, b.proses_penyerahan,b.tgl_penyerahan_ke_mhs, b.pengambil, b.srt_kuasa
                FROM t_foto_ijazah a 
                LEFT JOIN t_ijazah b ON a.nim=b.nim
                LEFT JOIN m_status c ON a.status_foto=c.id
                WHERE a.nomor_sk_rektor='$cari'
                ");

            if($result == null){
                return redirect()->route('ijazah.bukubesar')->with('error', 'Data Yang anda cari tidak ditemukan');
            }else{
                return view('ijazah.bukubesar', compact('result', 'sk'));
            }
        }
    }
}
