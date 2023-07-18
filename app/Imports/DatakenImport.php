<?php

namespace App\Imports;

use App\Models\Dataken;
use Maatwebsite\Excel\Concerns\ToModel;

class DatakenImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dataken([
            'merk_kendaraan' => $row[1],
            'jenis_kendaraan' => $row[2],
            'tahun_pembuatan' => $row[3],
            'no_polisi' => $row[4],
            'no_mesin' => $row[5],
            'no_rangka' => $row[6],
        ]);
    }
}
