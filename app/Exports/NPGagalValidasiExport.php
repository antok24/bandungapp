<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class NPGagalValidasiExport implements FromCollection,WithHeadings
{
    use Exportable;

    public function collection()
    {
        $masa = '20211';

        $data = DB::connection('mysql2')->SELECT("SELECT a.nac,a.nama_mahasiswa,a.nama_ibu_kandung,a.kode_program_studi,b.nama_program_studi,
        a.nomor_hp_mahasiswa,a.alamat_email_mahasiswa,c.nama_kabko,a.ket_validasi
        FROM m_data_pribadi_sementara a
        LEFT JOIN m_program_studi b ON a.kode_program_studi=b.kode_program_studi
        LEFT JOIN m_kabko c ON a.kode_kabko=c.kode_kabko
        WHERE a.masa_registrasi_awal=$masa
        and a.kode_upbjj='24'
        and a.nac like '2%'
        and a.ket_validasi not like '%Double Daftar%'
        and a.ket_validasi not like '%Daftar Double%'
        and a.ket_validasi not like '%Data Ganda%' 
        and a.ket_validasi not like '%Data Double%' 
        and a.ket_validasi not like '%Double input%'
        and a.ket_validasi not like '%Batal Registrasi%'
        and a.ket_validasi not like '%uji coba%'
        and a.ket_validasi not like '%Duoble%'
        and a.ket_validasi not like '%Daftar'
        and a.nim is null");

        return collect($data);
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
            'Nama Kabko',
            'Keterangan',
        ];
    }
}
