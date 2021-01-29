<?php

namespace App\Imports;

use App\MPkbjj;
use Maatwebsite\Excel\Concerns\ToModel;

class PkbjjImport implements ToModel
{
    
    public function model(array $row)
    {
        return new MPkbjj([
            'nim' => $row[0],
            'nama' => $row[1],
            'kode_kegiatan' => $row[2],
            'no_sertifikat' => $row[3],
            'sebagai' => $row[4],
            'tgl_pelaksanaan' => $row[5],
            'tgl_sertifikat' => $row[6]
        ]);
    }
}
