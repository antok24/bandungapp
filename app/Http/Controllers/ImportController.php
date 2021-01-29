<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Mpkbjj;
use App\Imports\PkbjjImport;
use App\Imports\TutorImport;
use App\Imports\OsmbImport;
use App\Imports\ImporDisporseni;
use App\Disporseni;
use Excel;

class ImportController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function importpkbjj(Request $request)
    {
        //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new PkbjjImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Import Data peserta pkbjj Berhasil']);
        }  
        return redirect()->back()->with(['error' => 'Data Gagal ! Silahkan import ulang']);
    }

    public function importDisporseni(Request $request)
    {
        //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new ImporDisporseni, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Import Data peserta pkbjj Berhasil']);
        }  
        return redirect()->back()->with(['error' => 'Data Gagal ! Silahkan import ulang']);
    }

    public function importosmb(Request $request)
    {
        //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new OsmbImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Import Data peserta osmb Berhasil']);
        }  
        return redirect()->back()->with(['error' => 'Data Gagal ! Silahkan import ulang']);
    }

    public function importtutor(Request $request)
    {
        //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new TutorImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Import Data peserta tutor Berhasil']);
        }  
        return redirect()->back()->with(['error' => 'Data Gagal ! Silahkan import ulang']);
    }
}
