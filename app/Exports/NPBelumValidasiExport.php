<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class NPBelumValidasiExport implements FromCollection, WithHeadings
{
    use Exportable;

    public function collection()
    {
        $masa = '20211';

        $NPBlmValidasi = DB::connection('mysql2')->SELECT("SELECT a.nac,a.nama_mahasiswa,a.nama_ibu_kandung,a.kode_program_studi,b.nama_program_studi, a.nomor_hp_mahasiswa,a.alamat_email_mahasiswa,c.nama_kabko
        FROM m_data_pribadi_sementara a 
        LEFT JOIN m_program_studi b ON a.kode_program_studi=b.kode_program_studi
        LEFT JOIN m_kabko c ON a.kode_kabko=c.kode_kabko
        WHERE a.masa_registrasi_awal='$masa' and a.kode_upbjj='24' and a.nac like '2%' and a.ket_validasi is null and a.nim is null");

        return collect($NPBlmValidasi);
    }

    public function headings(): array
    {
        return [
            'NAC',
            'Nama',
            'Nama Ibu',
            'Kode prodi',
            'Nama program Studi',
            'Nomor HP',
            'Alamat Email',
            'Nama Kabko'
        ];
    }
}
