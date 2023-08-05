<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hobi extends Model
{
    use HasFactory;
    protected $table = "hobi";
    protected $fillable = ['id_hobi','hobi'];

    public function siswa(){
        return $this->belongsTo(siswa::class,'hobi');
    }
}
