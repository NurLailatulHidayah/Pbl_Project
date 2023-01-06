<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    use HasFactory;
    protected $table = 'penimbangans';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function posyandu(){
        return $this->belongsTo(Posyandu::class,'posyandu_id','id');
    }

    public function bayi(){
        return $this->belongsTo(Bayi::class,'bayi_id','id');
    }
}
