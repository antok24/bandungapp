<?php

namespace App\Imports;

use App\Disporseni;
use Maatwebsite\Excel\Concerns\ToModel;

class ImporDisporseni implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Disporseni([
            'nim' => $row[1],
            'nama_mahasiswa' => $row[2],
            'jenis_lomba' => $row[3],
            'no_sertifikat' => $row[4],
            'sebagai' => $row[5],
            'tanggal_pelaksanaan' => $row[6],
            'tanggal_sertifikat' => $row[7],
            'nip_ttd' => $row[11],
        ]);
    }
}
