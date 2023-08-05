<?php

namespace App\Http\Controllers;

use App\Models\agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = agama::orderBy('id_agama', 'desc')->paginate(20);
        return view('agama/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/agama/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Session::flash('nomor_induk', $request->nomor_induk);
        // Session::flash('nama', $request->nama);
        // Session::flash('alamat', $request->alamat);
        Session::flash('agama', $request->agama);
        
        $request->validate(
            [
                // 'nomor_induk'=>'required|numeric',
                // 'nama'=>'required',
                // 'alamat'=>'required',
                // 'gender'=>'required',
                'agama'=>'required'
                
                //'foto' =>'required|mimes:jpeg,jpg,png,gif'
            ]
        ,[
            // 'nomor_induk.required'=>'Nomor Induk Wajib Diisi',
            // 'nomor_induk.numeric'=>'Nomor Induk Wajib Diisi Dengan Angka',
            // 'nama.required'=>'Nama Wajib Diisi',
            // 'alamat.required'=>'Alamat Wajib Diisi',
            'agama.required'=>'Agama Wajib Diisi',
        
            //'foto.required'=>'Foto Wajib Diisi',
            //'foto.mimes'=>'Foto Hanya Bisa Berekstensi Jpeg,Jpg,Png,Gif'
        ]);

        //$foto_file = $request->file('foto');
       // $foto_ekstensi = $foto_file->extension();
        //$foto_nama = date('ymdhis').".".$foto_ekstensi;
        //$foto_file->move(public_path('foto'),$foto_nama);

        $data = [
            // 'id_agama' => $request->input('id_agama'),
            // 'nama' => $request->input('nama'),
            // 'alamat' => $request->input('alamat'),
            // 'gender' => $request->gender,
            'id_agama' => $request->id_agama,
            'agama' => $request->input('agama')
            
            
            //'foto' => $foto_nama
        ];
        agama::create($data);
        return redirect('agama')->with('success','Berhasil Memasukan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = agama::where('id_agama', $id)->first();
        return view('agama/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = agama::where('id_agama', $id)->first();
        return view('agama/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            [
             
                // 'nama'=>'required',
                // 'alamat'=>'required',
                // 'gender' =>'required',
                'agama' =>'required'
            ]
        ,[
            
            'nomor_induk.numeric'=>'Nomor Induk Wajib Diisi Dengan Angka',
            // 'nama.required'=>'Nama Wajib Diisi',
            // 'alamat.required'=>'Alamat Wajib Diisi',
            'agama.required'=>'agama Wajib Diisi'
        ]);
        $data = [
            // 'nama' => $request->input('nama'),
            // 'alamat' => $request->input('alamat'),
            // 'gender' => $request->input('gender'),   
            'agama' => $request->input('agama')

        ];  

        agama::where('id_agama', $id)->update($data);
        return redirect('/agama')->with('success','Berhasl Melakukan Update Data');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        agama::where('id_agama', $id)->delete();
        return redirect('/agama')->with('success','berhasil Menghapus Data');
    }
}
