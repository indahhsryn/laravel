<?php

namespace App\Http\Controllers;

use App\Models\Pilihan;
use Illuminate\Http\Request;

class PilihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pilihan::all();
        return view('layout/tambah', [
            "title" => "Tambah Data",
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilihan = Pilihan::all();
        return view('layout.create', [
            "title" => "Tambah Data",
            "pilihan" => $pilihan,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pilihan = new Pilihan();
        $pilihan->judul = $request->judul;
        $pilihan->pilihan = $request->pilihan;
        $pilihan->deskripsi = $request->deskripsi;
        $pilihan->save();

        return redirect('tambah');
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
        $pilihan = Pilihan::find($id);
        return view('layout/edit',[
            "title" => "Edit Data",
            "pilihan" => $pilihan
        ]);
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
        $pilihan = Pilihan::find($id);
        $pilihan->judul = $request->judul;
        $pilihan->pilihan = $request->pilihan;
        $pilihan->deskripsi = $request->deskripsi;
        $pilihan->save();

        return redirect('tambah');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pilihan = Pilihan::find($id);
        $pilihan->delete();
        return redirect('/tambah');
    }
}
