<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class UserController extends Controller
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
            $result = DB::SELECT(" SELECT a.id, a.name, a.email, b.namagroup FROM users a JOIN mgroup b ON a.id_group=b.id_group");
            return view('user.index', compact('result'));
        }
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'id_group' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'id_group' => $request->id_group,
            'password' => bcrypt($request->password)
            ]);
        return redirect()->route('user.index')
                        ->with('success', 'Data Baru berhasil dibuat');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'id_group' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->id_group = $request->get('id_group');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect()->route('user.index')
                        ->with('success', 'Update User berhasil');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'User berhasil di hapus');
    }
}
