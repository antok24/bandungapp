<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\BanPT;

class BANPTController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        date_default_timezone_set("Asia/Bangkok");
        $tanggal = date("Y-m-d");
        $tetap = 'AKRED';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $nomor = \App\BanPT::max('id');
        $no = (int) substr($nomor, 1, 3);
        $nomorurut = $no+1;
        $nourut = sprintf("%04s", $nomorurut).'/'.$tetap.'/'.$bulanRomawi[date('n')].'/'.date('Y');

        $result = BanPT::paginate(10);
        return view('ban-pt.index', compact('result', 'nourut'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'id' => 'required',
            'kode_program_studi' => 'required',
            'nomor_sk_ban_pt' => 'required',
            'peringkat' => 'required',
            'tgl_mulai_sk' => 'required',
            'tgl_akhir_sk' => 'required',
        ]);

        BanPT::create([
            'id' => $request->id,
            'kode_program_studi' => $request->kode_program_studi,
            'nomor_sk_ban_pt' => $request->nomor_sk_ban_pt,
            'peringkat' => $request->peringkat,
            'tgl_mulai_sk' => $request->tgl_mulai_sk,
            'tgl_akhir_sk' => $request->tgl_akhir_sk
            ]);
        return redirect()->route('ban-pt.index')
                        ->with('success', 'Data Baru berhasil dibuat');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $banpt = BanPT::find($id);
        return view('ban-pt.edit', compact('banpt'));
    }

    public function update(Request $request, $id)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'nomor_sk_ban_pt' => 'required',
            'kode_program_studi' => 'required',
            'peringkat' => 'required',
            'tgl_mulai_sk' => 'required',
            'tgl_akhir_sk' => 'required',
        ]);

        $banpt = BanPT::find($id);
        $banpt->nomor_sk_ban_pt = $request->get('nomor_sk_ban_pt');
        $banpt->kode_program_studi = $request->get('kode_program_studi');
        $banpt->peringkat = $request->get('peringkat');
        $banpt->tgl_mulai_sk = $request->get('tgl_mulai_sk');
        $banpt->tgl_akhir_sk = $request->get('tgl_akhir_sk');
        $banpt->save();
        return redirect()->route('ban-pt.index')
                        ->with('success', 'Update User berhasil');
    }

    public function destroy($id)
    {
        //
    }
}
