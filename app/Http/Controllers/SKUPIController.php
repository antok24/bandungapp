<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\SKUPI;
use Carbon\Carbon;

class SKUPIController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
            $tampil = DB::table('t_sk_upi')->paginate(3);
            return view('upi-sk.create', ['tampil'=> $tampil]);
        }
    }

    public function store(Request $request)
    {
        $LotusX = Auth::user()->id_group;
        if($LotusX != 1 && $LotusX != 2 && $LotusX != 3 && $LotusX != 4 && $LotusX != 7 && $LotusX != 8){
            abort(403);
        }else{
            date_default_timezone_set("Asia/Bangkok");
            $request->validate([
                'nomor_sk_upi' => 'required',
                'tgl_kegiatan' => 'required',
                'lokasi' => 'required',
                'jumlah_peserta' => 'required',
                'status_sk' => 'required'
            ]);

            SKUPI::create([
                'nomor_sk_upi' => $request->nomor_sk_upi,
                'tgl_kegiatan' => $request->tgl_kegiatan,
                'lokasi' => $request->lokasi,
                'jumlah_peserta' => $request->jumlah_peserta,
                'status_sk' => $request->status_sk
                ]);
            return redirect()->route('sk-upi.create')->with('success', 'Data SK untuk Kegiatan UPI berhasil disimpan');
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
}
