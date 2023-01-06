<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    use HasFactory;

    protected $table = 'bayis';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function posyandu(){
        return $this->belongsTo(Posyandu::class,'posyandu_id','id');
    }
}
