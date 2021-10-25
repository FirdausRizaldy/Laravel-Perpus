<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_pegawai extends Controller
{
    public function index(){
        $pegawai = DB::table('pegawai')->get();

        $data = array(
                'menu' => 'pegawai',
                'submenu' => '',
                'pegawai' => $pegawai
    	        );
            

        return view('perpus/pegawai', $data);
    }

    public function tambahPegawai(){
        $pegawai = DB::table('pegawai')->get();
        $data = array(
            'menu' => 'pegawai',
            'submenu' => '',
            'pegawai' => $pegawai
            );
      
        return view('perpus/tambah_peg', $data);
        
    }

    public function insertDataPeg(Request $post){
        
        DB::table('pegawai')->insert([
        'Nama_pegawai' => $post->nama,
        'Username' => $post->username,
        'Password' => $post->password,
        'Status_pegawai' => $post->status]);
            
        return redirect('/pegawai');
    }

    public function editPegawai($NIP){
        $pegawai = DB::table('pegawai')->where('NIP', $NIP)->get();
        $data = array(
            'menu' => 'pegawai',
            'submenu' => '',
            'pegawai' => $pegawai
            );
        return view('perpus/edit_peg',['pegawai' => $pegawai], $data);
    }

    public function updatePegawai(Request $post){
 
        DB::table('pegawai')->where('NIP', $post->NIP)->update([
        'Nama_pegawai' => $post->Nama_pegawai,
        'Password' => $post->Password,
        'Status_pegawai' => $post->Status_pegawai]);
 
        return redirect('/pegawai');
    }


}
