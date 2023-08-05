<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginRegController extends Controller
{
    //

    function index(){
        return view("logregis/index");
    }

    function login(Request $request){
        Session::flash('email', $request->email);

        $request->validate([
          'email' => 'required',
          'password' => 'required'  
        ], [
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($login)){
            
            return redirect('siswa')->with('success', 'Halo'.'  '.Auth::user()->name.'    '.'Berhasil Login');
        } else {
            
        return redirect('login')->withErrors('Email Atau Password Anda Salah');
        }

    }

    function register(){
        return view('/logregis/register');
    }

    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|max:6'  
        ], [
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email Anda Tidak Valid',
            'email.unique' => 'Email Sudah Digunakan User Lain',
            'password.required' => 'Password Wajib Diisi',
            'password.max' => 'Password Maksimal Adalah 6 Kata',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
         User::create($data);

        $register = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($register)){
            
            return redirect('login')->with('success','  '.Auth::user()->name.'  '.'Berhasil Membuat Akun');
        } else {
            
        return redirect('login')->withErrors('Email Atau Password Anda Salah');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect("login/")->with('success','Anda Berhasil Logout');
    }
}
