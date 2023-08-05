<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agama extends Model
{
    use HasFactory;
    protected $table = "agama";
    protected $fillable = ['id_agama','agama'];

    public function siswa(){
        return $this->belongsTo(siswa::class,'agama');
    }
}
