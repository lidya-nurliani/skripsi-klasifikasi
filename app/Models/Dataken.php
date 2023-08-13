<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataken extends Model
{
    use HasFactory;
    protected $table = "dataken";
    protected $fillable = [ 'merk_id','jenis_id','tahun_pembuatan', 'no_polisi', 'no_mesin', 'no_rangka'];

    public function merk() {
        return $this->belongsTo(Merk::class, 'merk_id');
    }

    public function jenis() {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }
}
