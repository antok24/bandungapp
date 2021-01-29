<?php

namespace App\Imports;

use App\SertifikatAll;
use Maatwebsite\Excel\Concerns\ToModel;

class TutorImport implements ToModel
{
    
    public function model(array $row)
    {
        return new SertifikatAll([
            'nim' => $row[1],
            'nama' => $row[2],
            'kode_kegiatan' => $row[3],
            'no_sertifikat' => $row[4],
            'sebagai' => $row[5],
            'tgl_pelaksanaan' => $row[6],
            'tgl_sertifikat' => $row[7],
            'tema' => $row[8],
            'narasumber' => $row[9],
            'lokasi' => $row[10],
            'ttd_nip' => $row[11]
        ]);
    }
}
