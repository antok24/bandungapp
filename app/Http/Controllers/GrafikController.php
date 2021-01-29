<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Exports\NPBelumValidasiExport;
use App\Exports\NPGagalValidasiExport;
use App\Exports\PBelumValidasiExport;
use App\Exports\PGagalValidasiExport;
use Maatwebsite\Excel\Facades\Excel;

class GrafikController extends Controller
{
    public static $kon = 'mysql';
    public static $con = 'mysql2';

    public function exporta(Request $request)
    {
        return Excel::download(new NPBelumValidasiExport(), 'NonPendas_Belum_Validasi.xlsx');
        
    }

    public function exportb(Request $request)
    {
        return Excel::download(new NPGagalValidasiExport(), 'NonPendas_Gagal_Validasi.xlsx');
        
    }

    public function exportc(Request $request)
    {
        return Excel::download(new PBelumValidasiExport(), 'Pendas_Belum_Validasi.xlsx');
        
    }

    public function exportd(Request $request)
    {
        return Excel::download(new PGagalValidasiExport(), 'Pendas_Gagal_Validasi.xlsx');
        
    }

    public function index()
    {
        $masa = '20211';
        $mabavalidasi = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nim) jumlahmahasiswa FROM m_data_pribadi_sementara a WHERE a.kode_upbjj='24' AND a.masa_registrasi_awal='$masa' AND a.nim is not null");

        $mabablmvalidasi = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nac) jumlahmahasiswa FROM m_data_pribadi_sementara a WHERE a.kode_upbjj='24' AND a.masa_registrasi_awal='$masa' AND a.nim is null");

        $npcetakspp = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nim) as total
        FROM t_billing_header a
        LEFT JOIN m_data_pribadi b ON a.nim=b.nim
        LEFT JOIN m_jenis_bayar c ON a.kodejenisbayar=c.kodejenisbayar
        WHERE a.masa='$masa'
        AND b.kode_upbjj='24'
        AND b.masa_registrasi_awal='$masa'
        and a.kodestatusbiling <> 'x'
        AND a.kodejenisbayar='002'");

        $pcetakspp = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nim) as total
        FROM t_billing_header a
        LEFT JOIN m_data_pribadi b ON a.nim=b.nim
        LEFT JOIN m_jenis_bayar c ON a.kodejenisbayar=c.kodejenisbayar
        WHERE a.masa='$masa'
        AND b.kode_upbjj='24'
        AND b.masa_registrasi_awal='$masa'
        AND a.kodejenisbayar='001'");

        $pscetakspp = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nim) as total
        FROM t_billing_header a
        LEFT JOIN m_data_pribadi b ON a.nim=b.nim
        LEFT JOIN m_jenis_bayar c ON a.kodejenisbayar=c.kodejenisbayar
        WHERE a.masa='$masa'
        AND b.kode_upbjj='24'
        AND b.masa_registrasi_awal='$masa'
        AND a.kodejenisbayar='003'");

        $npbayarspp = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nim) as total
        FROM t_billing_header a
        LEFT JOIN m_data_pribadi b ON a.nim=b.nim
        LEFT JOIN m_jenis_bayar c ON a.kodejenisbayar=c.kodejenisbayar
        WHERE a.masa='$masa'
        AND b.kode_upbjj='24'
        AND b.masa_registrasi_awal='$masa'
        AND a.kodejenisbayar='002'
        AND a.nim LIKE '0%'
        AND (a.statusbank='1' or a.statusbank='3')");

        $pbayarspp = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nim) as total
        FROM t_billing_header a
        LEFT JOIN m_data_pribadi b ON a.nim=b.nim
        LEFT JOIN m_jenis_bayar c ON a.kodejenisbayar=c.kodejenisbayar
        WHERE a.masa='$masa'
        AND b.kode_upbjj='24'
        AND b.masa_registrasi_awal='$masa'
        AND a.kodejenisbayar='001'
        AND a.nim LIKE '8%'
        AND (a.statusbank='1' or a.statusbank='3')");

        $psbayarspp = DB::connection('mysql2')->SELECT("SELECT COUNT(a.nim) as total
        FROM t_billing_header a
        LEFT JOIN m_data_pribadi b ON a.nim=b.nim
        LEFT JOIN m_jenis_bayar c ON a.kodejenisbayar=c.kodejenisbayar
        WHERE a.masa='$masa'
        AND b.kode_upbjj='24'
        AND b.masa_registrasi_awal='$masa'
        AND a.kodejenisbayar='003'
        AND a.nim LIKE '5%'
        AND (a.statusbank='1' or a.statusbank='3')");

        $kabko = DB::connection('mysql2')->SELECT("SELECT a.kode_kabko,b.nama_kabko,COUNT(a.nim) as total
        FROM m_data_pribadi a 
        LEFT JOIN m_kabko b ON a.kode_kabko=b.kode_kabko 
        WHERE a.kode_upbjj='24' AND a.masa_registrasi_awal='20202'
        AND a.nim like '0%'
        group by a.kode_kabko");

        $pkabko = DB::connection('mysql2')->SELECT("SELECT a.kode_kabko,b.nama_kabko,COUNT(a.nim) as total
        FROM m_data_pribadi a 
        LEFT JOIN m_kabko b ON a.kode_kabko=b.kode_kabko 
        WHERE a.kode_upbjj='24' AND a.masa_registrasi_awal='20202'
        AND a.nim like '8%'
        group by a.kode_kabko");

        $pskabko = DB::connection('mysql2')->SELECT("SELECT a.kode_kabko,b.nama_kabko,COUNT(a.nim) as total
        FROM m_data_pribadi a 
        LEFT JOIN m_kabko b ON a.kode_kabko=b.kode_kabko 
        WHERE a.kode_upbjj='24' AND a.masa_registrasi_awal='20202'
        AND a.nim like '5%'
        group by a.kode_kabko");

        //dd($kabko);
        // $kabko = DB::connection('mysql2')->table('m_data_pribadi')->leftjoin('m_kabko','m_kabko.kode_kabko','=','m_data_pribadi.kode_kabko')->select('m_data_pribadi.kode_kabko','m_kabko.nama_kabko')->get();

        return view('front.grafik', compact('mabavalidasi', 'mabablmvalidasi','npcetakspp','pcetakspp','pscetakspp','npbayarspp','pbayarspp','psbayarspp', 'kabko','pkabko','pskabko'));
    }
}
