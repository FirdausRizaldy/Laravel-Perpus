<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class C_auth_login extends Controller
{
    public function preLogin(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return redirect('/blankPage');
            }
            else{
                return redirect('/blankPageAnggota');
            }
        }
        else{
            return view('perpus/login');
        }
    }

    public function postLogin(Request $request){
        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            if(Auth::user()->role == 'admin'){
                return redirect('/blankPage');
            }
            else{
                return redirect('/blankPageAnggota');
            }
        }
        else{
            return view('perpus/login');
        }
    }

    public function preRegister(){
        return view('/regis');
    }
    
    public function postRegister(Request $request)
    {
     $this->validate($request,[
      'name'=>'required',
      'email'=>'required|email|unique:users',
      'password'=>'required',
            'role'=>'required'
     ]);

     User::create([
      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>bcrypt($request->password),
            'role'=>$request->role
     ]);

     return redirect('/loginPegawai');
    }

    public function Logout()
    {
     Auth::logout();
     return redirect('/loginPegawai');
    }




}
