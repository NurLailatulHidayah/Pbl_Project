<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'bayi->id','posyandu->nama_posyandu','tinggi_badan','berat_badan',
        'posisi','umur','tanggal_pemeriksaan',
    ];
    public $timestamps = false;

    public function posyandu(){
        return $this->belongsTo(Posyandu::class,'posyandu_id','id');
    }

    public function bayi(){
        return $this->belongsTo(Bayi::class,'bayi_id','id');
    }

    public function penimbangan(){
        return $this->belongsTo(Penimbangan::class,'penimbangan_id','id');
    }
}
