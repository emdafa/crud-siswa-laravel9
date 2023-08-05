<?php

namespace App\Http\Controllers;

use App\Models\hobi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = hobi::orderBy('id_hobi', 'desc')->paginate(20);
        return view('hobi/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/hobi/create');
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
         //
        // Session::flash('nomor_induk', $request->nomor_induk);
        // Session::flash('nama', $request->nama);
        // Session::flash('alamat', $request->alamat);
        Session::flash('hobi', $request->hobi);
        
        $request->validate(
            [
                // 'nomor_induk'=>'required|numeric',
                // 'nama'=>'required',
                // 'alamat'=>'required',
                // 'gender'=>'required',
                'hobi'=>'required'
                
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
            'id_hobi' => $request->id_hobi,
            'hobi' => $request->input('hobi')
            
            
            //'foto' => $foto_nama
        ];
        hobi::create($data);
        return redirect('hobi')->with('success','Berhasil Memasukan Data');
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
        $data = hobi::where('id_hobi', $id)->first();
        return view('hobi/show')->with('data', $data);
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
        $data = hobi::where('id_hobi', $id)->first();
        return view('hobi/edit')->with('data', $data);
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
                'hobi' =>'required'
            ]
        ,[
            
            // 'nomor_induk.numeric'=>'Nomor Induk Wajib Diisi Dengan Angka',
            // 'nama.required'=>'Nama Wajib Diisi',
            // 'alamat.required'=>'Alamat Wajib Diisi',
            'hobi.required'=>'agama Wajib Diisi'
        ]);
        $data = [
            // 'nama' => $request->input('nama'),
            // 'alamat' => $request->input('alamat'),
            // 'gender' => $request->input('gender'),   
            'hobi' => $request->input('hobi')

        ];  

        hobi::where('id_hobi', $id)->update($data);
        return redirect('/hobi')->with('success','Berhasl Melakukan Update Data');
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
        hobi::where('id_hobi', $id)->delete();
        return redirect('/hobi')->with('success','berhasil Menghapus Data');
    }
}
