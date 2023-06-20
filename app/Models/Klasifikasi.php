<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    use HasFactory;
    protected $table = 'klasifikasi';
    protected $primarykey = "id";
    protected $fillable = ['dataken_id', 'jenis_kendaraan', 'tahun_pembuatan', 'bahan_bakar', 'komponen_mesin', 'ban', 'lampu_utama', 'kondisi_rem','kelayakan'];

    public function dataken() {
        return $this->belongsTo(Dataken::class, 'dataken_id');
    }
}
