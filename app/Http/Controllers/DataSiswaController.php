<?php

namespace App\Http\Controllers;

use PDF;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use Barryvdh\DomPDF\Facade;

class DataSiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all(); 
        return view('datasiswa.index', ['siswa' => $siswa]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }

        Siswa::create([
            'NIM' => $request->NIM,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'image' => $image_name,
        ]);
        return redirect('/datasiswa');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('guru');
        $siswa = Siswa::find($id);
        return view('datasiswa.editsiswa',['siswa'=>$siswa]);
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
        $siswa = Siswa::find($id);
        $siswa->NIM = $request->NIM;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;        
        $siswa->notelp = $request->notelp;        
        if($siswa->image &&file_exists(storage_path('app/public/' . $siswa->image)))
        {
            \Storage::delete('public/'.$siswa->image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $siswa->image = $image_name;
        $siswa->save();
        return redirect('/datasiswa');
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
    }

    public function delete($id)
    {
        $this->authorize('guru');
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/datasiswa');
    }

    public function add()
    {
        $this->authorize('guru');
        return view('datasiswa.addsiswa');
    }

    public function cetak_pdf(){
        $siswa = Siswa::all();
        $pdf = PDF::loadview('datasiswa.cetak_pdf',['siswa'=>$siswa]);
        return $pdf->stream();
    }
}
