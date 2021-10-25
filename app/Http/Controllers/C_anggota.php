<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_anggota extends Controller
{
    public function index(){
        $anggota = DB::table('anggota')->get();

        $data = array(
                'menu' => 'anggota',
                'submenu' => '',
                'anggota' => $anggota
    	        );
            

        return view('perpus/anggota', $data);
    }

    public function tambahAnggota(){
        $anggota = DB::table('anggota')->get();
        $data = array(
            'menu' => 'anggota',
            'submenu' => '',
            'anggota' => $anggota
            );
      
        return view('perpus/tambah_anggota', $data);
        
    }

    public function insertData(Request $post){
        
        DB::table('anggota')->insert([
        'Nama_anggota' => $post->nama_anggota,
        'Tahun_masuk' => $post->tahun_masuk,
        'Kelas' => $post->kelas,
        'Username_anggota' => $post->user_anggota,
        'Password_anggota' => $post->pass_anggota,
        'Status_anggota' => $post->status_anggota]);
            
        return redirect('/anggota');
    }

    public function editAnggota($NIS_NIP){
        $anggota = DB::table('anggota')->where('NIS_NIP', $NIS_NIP)->get();
        $data = array(
            'menu' => 'anggota',
            'submenu' => '',
            'anggota' => $anggota
            );
        return view('perpus/edit_anggota',['anggota' => $anggota], $data);
    }

    public function updateAnggota(Request $post){
 
        DB::table('anggota')->where('NIS_NIP', $post->NIS_NIP)->update([
            'Nama_anggota' => $post->nama_anggota,
            'Tahun_masuk' => $post->tahun_masuk,
            'Kelas' => $post->kelas,
            'Username_anggota' => $post->user_anggota,
            'Password_anggota' => $post->pass_anggota,
            'Status_anggota' => $post->status_anggota]);
 
        return redirect('/anggota');
    }



}
