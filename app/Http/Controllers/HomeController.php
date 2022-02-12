<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layout/index',[
            "title" => "Dashboard"
        ]);
    }
    public function login(){
        return view('layout/login', [
            "title" => "Login"
        ]);
    }
   public function auth(Request $request){
       $validasi = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required']
       ]);
       if(Auth::attempt($validasi)){
         $request->session()->regenerate();
         return redirect()->intended('home');  
       }
       return back();            
   }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

