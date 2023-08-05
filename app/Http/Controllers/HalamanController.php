<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view("halaman/index");
    }

    function tentang(){
        return view("halaman/tentang");
    }

    function kontak(){
        $data = [
            'judul' => 'Ini Adalah Halaman Kontak',
            'kontak' => [
                'email' => 'dafaneiru@gmail.com',
                'yt' => 'dafanieru'
            ]
            ];
        return view("halaman/kontak")->with($data);
    }
}
