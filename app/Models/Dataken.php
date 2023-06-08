<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataken extends Model
{
    use HasFactory;
    protected $table = "dataken";
    protected $fillable = [ 'merk_kendaraan','jenis_kendaraan','tahun_pembuatan', 'no_polisi', 'no_mesin', 'no_rangka'];
}
