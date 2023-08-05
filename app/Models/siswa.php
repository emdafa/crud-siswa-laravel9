<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $fillable = ['nomor_induk','nama','alamat','gender','id_agama','id_hobi','foto','dokumen'];


    public function agama(){
        return $this->hasOne(agama::class,'id_agama');
    }
     public function hobi(){
        return $this->hasMany(hobi::class,'hobi');
     }  

        
   
}


