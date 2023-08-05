<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswahobi extends Model
{
    use HasFactory;
    protected $table = "siswa_hobi";
    protected $fillable = ['id','nomor_induk','id_hobi','id_agama'];

    public function siswa(){
        return $this->belongsTo(siswa::class);
    }

}
