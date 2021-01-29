<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class PSBelumCetakLip implements FromCollection, WithHeadings
{
    use Exportable;

    public function collection()
    {
        $masa = '20211';

        $data = DB::connection('mysql2')->SELECT("SELECT a.nim,a.nama_mahasiswa,a.nama_ibu_kandung,a.kode_program_studi,b.nama_program_studi,
        a.nomor_hp_mahasiswa,a.alamat_email_mahasiswa,c.nama_kabko,a.alamat_mahasiswa,a.kode_status_dp
        FROM m_data_pribadi a
        LEFT JOIN m_program_studi b ON a.kode_program_studi=b.kode_program_studi
        LEFT JOIN m_kabko c ON a.kode_kabko=c.kode_kabko
        LEFT OUTER JOIN t_billing_header d ON a.nim=d.nim
        WHERE a.kode_upbjj='24'
        AND a.masa_registrasi_awal=$masa
        AND a.kode_status_dp <> 'DK'
        AND (a.nim like '5%' or a.nim like '9%')
        AND d.nim is null");

        return collect($data);
    }

    public function headings(): array
    {
        return [
            'NIM',
            'Nama',
            'Nama Ibu',
            'Kode prodi',
            'Nama program Studi',
            'Nomor HP',
            'Alamat Email',
            'Nama Kabko',
            'Alamat',
            'Status DP'
        ];
    }
}
