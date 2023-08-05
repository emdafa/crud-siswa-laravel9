<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\siswahobi;
use Illuminate\Http\Request;

class SiswaHobiController extends Controller
{
    //
    public function siswahobi(){
        $siswahobi = siswa::all();
        return view('siswahobi.siswahobi',['siswahobi' => $siswahobi]);
    }
}
