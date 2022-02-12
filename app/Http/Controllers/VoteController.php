<?php

namespace App\Http\Controllers;

use App\Models\Pilihan;
use App\Models\vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function vote(){
        $pilihan = Pilihan::all();
        return view('layout/vote', [
            "title"=> "Votting",
            "pilihan" => $pilihan
        ]);
    }
   public function votting($id){
       $vote = vote::firstOrCreate(
        ['user' => Auth::user()->name],
        ['id_pilihan' => $id,Auth::user()->name ]
       );

       session()->flash('success', 'Anda Berhasil Votting!');
       return redirect('/vote');
   }
   public function hasil(){
       $data = vote::get();
       $hasil = vote::where('id_pilihan' , '=', '1')->count();
       return view('layout/result',[
           "title" => "Hasil Votting",
           "data" => $data,
           "hasil" => $hasil
       ]);
   }
   public function delete($id){
        $data = vote::find($id);
        $data->delete();
        return redirect('/hasil');
   }
   public function cetak(){
    $data = vote::get();
    $hasil = vote::where('id_pilihan' , '=', '1')->count();
    return view('layout/cetak',[
        "title" => "Cetak Data",
        "data" => $data,
        "hasil" => $hasil
    ]);
   }
}
