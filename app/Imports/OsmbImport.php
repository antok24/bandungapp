<?php

namespace App\Imports;

use App\Osmb;
use Maatwebsite\Excel\Concerns\ToModel;

class OsmbImport implements ToModel
{
  
    public function model(array $row)
    {
        return new Osmb([
            'nim' => $row[0],
            'nama' => $row[1],
            'program_studi' => $row[2],
            'kode_kegiatan' => $row[3],
            'no_sertifikat' => $row[4],
            'sebagai' => $row[5],
            'tgl_pelaksanaan' => $row[6],
            'tgl_sertifikat' => $row[7]
        ]);
    }
}
