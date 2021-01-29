<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\NoSertifikat;
use App\Msertifikat;


class NoSertifikatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $userlogin = Auth::user()->id_group;
        if($userlogin != 1 ){
            abort(403);
        }else{
        $result = DB::SELECT(
            "SELECT * FROM nosertifikat
            ");
            return view('Nomorsertifikat.index', compact('result'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'no_sertifikat' => 'required',
            'kode_sertifikat' => 'required',
            'tgl_pelaksanaan' => 'required',
            'tgl_sertifikat' => 'required',
        ]);

        NoSertifikat::create([
            'no_sertifikat' => $request->no_sertifikat,
            'kode_sertifikat' => $request->kode_sertifikat,
            'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
            'tgl_sertifikat' => $request->tgl_sertifikat
            ]);
        return redirect()->route('nomorsertifikat.index')
                        ->with('success', 'Data Baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
