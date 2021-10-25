<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyfirstController extends Controller
{
    public function index(){
        return view('webtest');
    }

    Public function nama(){
        $nama = "Dafiq Kurniawan";
        return view('showname', ['nama' => $nama]);

    }

    public function matkul(){
        $nama= "Jamaludin";
        $mk= ["alpro", "matdas", "pemrograman web", "jaringan komputer"];
        return view('matakuliah', ['nama'=>$nama, 'matkul'=>$mk]);
    }

    public function getNameFromUr1($nama){
        return view('showname', ['nama'=>$nama]);
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $req){
        $nama = $req->input('nama');
        $alamat = $req->input('alamat');
        return "Nama : " .$nama." dan Alamat: " .$alamat;
    }

    public function home(){
        return view('home');
    }

    public function tentang(){
        return view('tentang');
    }

    
}

//Route::get('tampilnama', 'MyfirstController@nama');

