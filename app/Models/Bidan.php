<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    use HasFactory;

    protected $table = 'bidans';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function posyandu(){
        return $this->belongsTo(Posyandu::class,'posyandu_id','id');
    }
}
