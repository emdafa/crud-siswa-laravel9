<?php

namespace App\Http\Controllers;

use App\Models\agama;
use App\Models\hobi;
use App\Models\siswa;
use App\Models\siswahobi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //data siswa+agama aja
        // $data = DB::table('siswa')
        // ->join('agama','siswa.id_agama','=','agama.id_agama')
        // // ->join('hobi','siswa.id_hobi','=','hobi.id_hobi')
        // ->select('agama.agama','siswa.*')
        // ->get();

        //datahobi saja
        // $dathob = DB::table('siswa_hobi')
        // ->join('hobi','siswa_hobi.id_hobi','=','hobi.id_hobi')
        // // ->join('siswa','siswa_hobi.nomor_induk','=','siswa.nomor_induk')
        // ->select('hobi.hobi')
        // ->get();    

        //keseluruhan
        $data = DB::table('siswa_hobi')
        ->join('siswa','siswa_hobi.nomor_induk','=','siswa.nomor_induk')
        ->join('hobi','siswa_hobi.id_hobi','=','hobi.id_hobi')
        ->join('agama','siswa_hobi.id_agama','=','agama.id_agama')
        ->select('hobi.hobi','siswa.*','agama.agama')
        ->get();

        // $dathob = DB::table('siswa_hobi')
        
        // ->select('hobi.hobi')
        // ->get();   

        // $data = siswa::with('hobi')->get();
        // $dt = siswa::with('agama')->get();
        // $data = siswa::orderBy('nomor_induk', 'asc')->paginate(5);;

        // echo "<pre>";
        // print_r($data);
        // print_r($dathob);
        // echo "</pre>";
        //  dd($data->all());
        // echo $dathob;
        // $data = siswa::all();
        return view('siswa/index')->with('data',$data);
        // return view('siswa/index',compact('dathob'))->with('data',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = agama::pluck('agama','id_agama');
        $dt = hobi::pluck('hobi','id_hobi');
        return view('siswa/create',compact('data','dt'));
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
        // dd($request->all());
       
        Session::flash('nomor_induk', $request->nomor_induk);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);
        // Session::flash('id_agama', $request->id_agama);
        Session::flash('id_agama', $request->id_agama);
        Session::flash('id_hobi', $request->id_hobi);
        
        $request->validate(
            [
                // 'nomor_induk'=>'required|numeric',
                // 'nama'=>'required',
                // 'alamat'=>'required',
                // 'gender'=>'required',
                // 'agama'=>'required',
                'foto'=>'required|mimes:jpeg,jpg,png,gif',
                'dokumen'=>'required|mimes:pdf,docx'
            ]
        ,[
            // 'nomor_induk.required'=>'Nomor Induk Wajib Diisi',
            // 'nomor_induk.numeric'=>'Nomor Induk Wajib Diisi Dengan Angka',
            // 'nama.required'=>'Nama Wajib Diisi',
            // 'alamat.required'=>'Alamat Wajib Diisi',
            // 'gender.required'=>'Gender Wajib Diisi',
            'foto.required'=>'Foto Wajib Diisi',
            'foto.mimes'=>'Foto Hanya Bisa Berekstensi jpeg,jpg,png,gif',
            'dokumen.mimes'=>'Dokumen Hanya Bisa Berekstensi pdf,docx'
        ]);

        //FOTO
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        //DOKUMEN
        $dokumen_file = $request->file('dokumen');
        $dokumen_ekstensi = $dokumen_file->extension();
        $dokumen_nama = date('ymdhis').".".$dokumen_ekstensi;
        $dokumen_file->move(public_path('dokumen'),$dokumen_nama);
        

        $data = [
            'nomor_induk' => $request->input('nomor_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gender' => $request->gender,
            // 'id_agama' => $request->id_agama,
            'id_agama' => $request->id_agama,
            // 'id_hobi' => $request->id_hobi,
            // 'hobi' => $request->hobi
            // 'id_hobi' => implode(",",$request->id_hobi)
             'id_hobi' => implode(',',$request->id_hobi),
            // 'id_hobi' => $request->id_hobi
           
            
                    

            
            'foto' => $foto_nama,
            'dokumen' => $dokumen_nama
        ];

        // $datah = [
        //     'nomor_induk' => $request->input('nomor_induk'),
        //     // 'nama' => $request->input('nama'),
        //     // 'alamat' => $request->input('alamat'),
        //     // 'gender' => $request->gender,
        //     // 'id_agama' => $request->id_agama,
        //     // 'id_agama' => $request->id_agama,
        //     // 'id_hobi' => $request->id_hobi,
        //     // 'hobi' => $request->hobi
        //     'id_hobi' => $request->id_hobi
        //     // 'id_hobi' => implode(',',$request->id_hobi)
                

            
        //     // 'foto' => $foto_nama
        // ];
        
            # code...
        
        // foreach ($request->id_hobi as $hobi) {
        //    

        //     echo "<br />".$hobi;
            
        //   


        // }

       
        $hobis = $request->id_hobi;
        
        
        foreach ($hobis as $hobi) {
            # code...
            $hobis = $request->input('nomor_induk');
            $hobiss = $request->id_agama;
            siswahobi::create([
                'nomor_induk' => $hobis,
                'id_hobi' => $hobi,
                'id_agama' => $hobiss,
                
            ]);
            // echo $hobi;
        }



        
        // print_r($request->id_hobi);

        // $datah = $request->id_hobi;
        // $datah = explode(',', $datah);

        // $hobi = new siswa;
        // $hobi->hobi = json_decode($request->hobi);
        // $hobi->save();


        // if(!empty($request->input('hobi'))){
        //     foreach ($request->input('hobi') as $key => $value){
        //         DB::table('siswa')->insert(['hobi'=>$value]);
        //     }
        //         // $checkbox = join(',',$request->input('isi')); 
           
        // }else{
        //     $checkbox ='';
        // }
       

        // $agama = new agama;
        // $agama->agama = $request->input('agama');

        // $siswa = siswa::find($request->input('id_agama'));
        // $agama->siswa()->associate($siswa);
        // $agama->save();
        
        // $data = new siswa;
        // $datah = new siswa;
        // $data->nomor_induk = $request->input('nomor_induk');
        // $data->nama = $request->input('nama');
        // $data->alamat = $request->input('alamat');
        // $data->gender = $request->gender;
        // $data->id_agama = $request->id_agama;
        // $datah = $request->id_hobi;
        // $datah = explode('.',$datah);



        // $datahh = new siswahobi;
        // $datahh->nomor_induk = $request->input('nomor_induk');
        // $datahh = $request->id_hobi;
        // $datahh = explode('.',$datahh);
        // $data->foto = $foto_nama;
        // $data->save();
        
        
        // siswahobi::create($datah);
        siswa::create($data);
        return redirect('siswa')->with('success','Berhasil Memasukan Data');
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
         //
        //  $data = DB::table('siswa')->join('agama','siswa.id_agama','=','agama.id_agama')->join('hobi','siswa.id_hobi', '=', 'hobi.id_hobi')->select('agama.agama','siswa.*','hobi.hobi')->get();
        // $data = siswa::where('nomor_induk', $id)->first();
        // return view('siswa/show')->with('data', $data);

        // $dat = DB::table('siswa')->join('agama','siswa.id_agama','=','agama.id_agama')->join('hobi','siswa.id_hobi', '=', 'hobi.id_hobi')->select('agama.agama','siswa.*','hobi.hobi')->get();
        // // $data = siswa::orderBy('nomor_induk', 'asc')->paginate(5);
        
        //siswa
        $dat = DB::table('siswa')
        ->join('agama','siswa.id_agama','=','agama.id_agama')
        ->select('agama.agama','siswa.*')
        ->where('nomor_induk', $id)
        ->get();
        // $dt = siswa::where('nomor_induk', $id)->get();
        //  

        // $datsb = DB::table('siswa_hobi')
        // ->join('siswa','siswa_hobi.nomor_induk','=','siswa.nomor_induk')
        // ->join('hobi','siswa_hobi.id_hobi','=','hobi.id_hobi')
        // ->select('siswa.*','hobi.hobi')
        // ->where('nomor_induk', $id)
        // ->get(); 
       
        // $dat = DB::table('siswa')->where('nomor_induk', $id)->first();
        // $dat = DB::where('nomor_induk', $id)->get();
        // echo $dat;

        //hobi
        $dathob = DB::table('siswa_hobi')
        ->join('hobi','siswa_hobi.id_hobi','=','hobi.id_hobi')
        ->select('hobi.hobi')
        ->where('nomor_induk', $id)
        ->get();    

        // echo "<pre>";
        // print_r($dat);
        // print_r($dathob);
        // echo "</pre>";
        return view('siswa/show',compact('dathob'))->with('dat',$dat);
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
        $date = agama::pluck('agama','id_agama');
        $dt = hobi::pluck('hobi','id_hobi');
        $data = siswa::where('nomor_induk', $id)->first();
        return view('siswa/edit',compact('date','dt'))->with('data', $data,$date,$dt);

        
        
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
                // 'agama' =>'required'
            ]
        ,[
            
            // 'nomor_induk.numeric'=>'Nomor Induk Wajib Diisi Dengan Angka',
            // 'nama.required'=>'Nama Wajib Diisi',
            // 'alamat.required'=>'Alamat Wajib Diisi',
            // 'agama.required'=>'agama Wajib Diisi'
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gender' => $request->input('gender'),
            'id_agama' => $request->input('agama'),
            'id_hobi' => implode(",",$request->id_hobi)

        ];  
        
        // $datah = [
        //     // 'nama' => $request->input('nama'),
        //     // 'alamat' => $request->input('alamat'),
        //     // 'gender' => $request->gender,
        //     // 'id_agama' => $request->id_agama,
        //     // 'id_agama' => $request->id_agama,
        //     // 'id_hobi' => $request->id_hobi,
        //     // 'hobi' => $request->hobi
        //     'id_hobi' => $request->id_hobi
        //     // 'id_hobi' => implode(',',$request->id_hobi)

        // ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto'=>'mimes:jpeg,jpg,png,gif'
            ],[
                'foto.mimes'=>'Foto Hanya Bisa Berekstensi jpeg,jpg,png,gif'
            ]);

            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".".$foto_ekstensi;
            $foto_file->move(public_path('foto'),$foto_nama);

            $data_foto = siswa::where('nomor_induk', $id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto);

            $data=[
                'foto'=> $foto_nama
            ];
        }

        if ($request->hasFile('dokumen')) {
            $request->validate([
                'dokumen'=>'required|mimes:pdf,docx,xls'
            ],[
                'dokumen.mimes'=>'Dokumen Hanya Bisa Berekstensi pdf,docx'
            ]);

            $dokumen_file = $request->file('dokumen');
            $dokumen_ekstensi = $dokumen_file->extension();
            $dokumen_nama = date('ymdhis').".".$dokumen_ekstensi;
            $dokumen_file->move(public_path('dokumen'),$dokumen_nama);

            $data_dokumen = siswa::where('nomor_induk', $id)->first();
            File::delete(public_path('dokumen').'/'.$data_dokumen->dokumen);

            $data=[
                'dokumen'=> $dokumen_nama
            ];
        }
            
        $hobis = $request->id_hobi;
        
        
        foreach ($hobis as $hobi) {
            # code...
            // $hobis = $request->input('nomor_induk');
            // $hobiss = $request->id_agama;
            siswahobi::where('nomor_induk', $id)->update([
                // 'nomor_induk' => $hobis,
                'id_hobi' => $hobi,
                // 'id_agama' => $hobiss,
                
            ]);
            // echo $hobi;
        }
        
       
        siswa::where('nomor_induk', $id)->update($data);
        // siswahobi::where('nomor_induk', $id)->update($data);
        return redirect('/siswa')->with('success','Berhasl Melakukan Update Data');
        
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
        $data = siswa::where('nomor_induk', $id)->first();
        File::delete(public_path('foto').'/'.$data->foto);

        $data = siswa::where('nomor_induk', $id)->first();
        File::delete(public_path('dokumen').'/'.$data->dokumen);

        siswa::where('nomor_induk', $id)->delete();
        siswahobi::where('nomor_induk', $id)->delete();
        return redirect('/siswa')->with('success','berhasil Menghapus Data');
    }

    
}
