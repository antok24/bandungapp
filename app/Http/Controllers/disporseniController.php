<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Pejabat;
use App\Disporseni;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class disporseniController extends Controller
{
    public function add()
    {
        $pejabat = Pejabat::all();

        return view('disporseni.create', compact('pejabat'));
    }

    public function simpan( Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $request->validate([
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'no_sertifikat' => 'required',
            'sebagai' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'tanggal_sertifikat' => 'required',
            'jenis_lomba' => 'required',
            'nip_ttd' => 'required'
        ]);
        Disporseni::create($request->all());
        return redirect()->route('disporseni')
                        ->with('success', 'Data Baru berhasil dibuat');
    }

    public function index()
    {
        return view('disporseni.index');
    }

    public function cari()
    {
    	$cari = Input::get('cari');
        $result = DB::SELECT(
            "SELECT * FROM m_sertifikat_disporseni a WHERE a.nim='$cari'"
        );
        if($result == null){
            return redirect()->route('disporseni.index')->with('error', 'Data Yang anda cari tidak ditemukan, Mahaiswa tidak terdaftar sebagai peserta Disporseni');
        }else{
            return view('disporseni.index', compact('result'));
        }
        
    }

    public function print(Request $request,$nim)
    {
        $result = DB::SELECT(
            "SELECT * FROM m_sertifikat_disporseni a
            LEFT JOIN m_pejabat b ON a.nip_ttd=b.nip
            WHERE a.nim='$nim'"
        );

        foreach($result as $p) {
            echo $p->nama_mahasiswa;
        }

        $qrcode = base64_encode(QrCode::format('svg')
                ->size(100)
                ->errorCorrection('H')
                ->generate($p->nama_mahasiswa));
        
        $view  = \View::make('disporseni.cetak',['result' => $result, 'qrcode' => $qrcode])->render();
        $pdf   = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
            
        return $pdf->stream($nim.".Pdf");
    }
}
