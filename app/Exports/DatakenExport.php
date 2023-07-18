<?php

namespace App\Exports;

use App\Models\Dataken;
use Maatwebsite\Excel\Concerns\FromCollection;

class DatakenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dataken::all();
    }
}
