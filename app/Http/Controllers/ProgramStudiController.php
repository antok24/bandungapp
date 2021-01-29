<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\ProgramStudi;
use Carbon\Carbon;


class ProgramStudiController extends Controller
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
            $result = ProgramStudi::All();
            return view('programstudi.index', compact('result'));
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
            'kode_ps' => 'required',
            'nama_programstudi' => 'required'
        ]);

        ProgramStudi::create([
            'kode_ps' => $request->kode_ps,
            'nama_programstudi' => $request->nama_programstudi
            ]);
        return redirect()->route('programstudi.index')
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
    public function destroy($kode_ps)
    {
        $ps = ProgramStudi::find($kode_ps);
        $ps->delete();
        return back()->with('success','Data Berhasil dihapus!');
    }
}
