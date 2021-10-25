<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_dataBuku extends Controller
{
    //==============================Buku==========================//
    public function indexBuku(){
        $buku = DB::table('buku')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'buku',
                'buku' => $buku
    	        );
            

        return view('perpus/buku', $data);
    }

    public function indexBukuSiswa(){
        $buku = DB::table('buku')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'buku',
                'buku' => $buku
    	        );
            

        return view('perpus/buku', $data);
    }

    public function tambahBuku(){
        $jenis = DB::table('jenis_buku')->get();
        $penerbit = DB::table('penerbit')->get();
        $bahasa = DB::table('bahasa')->get();
        $buku = DB::table('buku')->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'buku',
            'buku' => $buku, $jenis, $penerbit, $bahasa
            );
      
        return view('perpus/tambah_buku', $data, ['jenis' => $jenis, 'penerbit' => $penerbit, 
        'bahasa' => $bahasa]);
    }

    public function insertDataBuku(Request $post){
        
        DB::table('buku')->insert([
        'ID_jenis' => $post->ID_jenis,
        'ID_penerbit' => $post->ID_penerbit,
        'ID_bahasa' => $post->ID_bahasa,
        'Judul_buku' => $post->Judul_buku,
        'Tahun_terbit' => $post->Tahun_terbit,
        'Penulis' => $post->Penulis,
        'Cetakan_ke' => $post->Cetakan_ke,
        'Harga' => $post->Harga,
        'Jumlah_eksemplar' => $post->Jumlah_eksemplar,
        'Kategori_buku' => $post->Kategori_buku]);
            
        return redirect('/buku');
    }

    public function editBuku($No_ISBN){
        $buku = DB::table('buku')->where('No_ISBN', $No_ISBN)->get();
        $jenis_buku = DB::table('jenis_buku')->get();
        $penerbit = DB::table('penerbit')->get();
        $bahasa = DB::table('bahasa')->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'buku',
            'buku' => $buku
            );
        return view('perpus/edit_buku',['buku' => $buku,'jenis_buku' => $jenis_buku, 'penerbit' => $penerbit, 
        'bahasa' => $bahasa], $data);
    }

    public function updateBuku(Request $post){
 
        DB::table('buku')->where('No_ISBN', $post->No_ISBN)->update([
            'ID_jenis' => $post->ID_jenis,
            'ID_penerbit' => $post->ID_penerbit,
            'ID_bahasa' => $post->ID_bahasa,
            'Judul_buku' => $post->Judul_buku,
            'Tahun_terbit' => $post->Tahun_terbit,
            'Penulis' => $post->Penulis,
            'Cetakan_ke' => $post->Cetakan_ke,
            'Harga' => $post->Harga,
            'Jumlah_eksemplar' => $post->Jumlah_eksemplar,
            'Kategori_buku' => $post->Kategori_buku]);
                
            return redirect('/buku');
    }


    //==============================JenisBuku==========================//
    public function indexJenisBuku(){
        $jenis_buku = DB::table('jenis_buku')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'jenis_buku',
                'jenis_buku' => $jenis_buku
    	        );
            

        return view('perpus/jenis_buku', $data);
    }

    public function tambahJenisBuku(){
        $jenis_buku = DB::table('jenis_buku')->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'jenis_buku',
            'jenis_buku' => $jenis_buku
            );
      
        return view('perpus/tambah_jenisBuku', $data);
        
    }

    public function insertDataJenisBuku(Request $post){
        
        DB::table('jenis_buku')->insert([
        'Nama_jenisbuku' => $post->nama_jenis,
        'Kode_jenisbuku' => $post->kode_jenis]);
            
        return redirect('/jenisBuku');
    }

    public function editJenisBuku($ID_jenis){
        $jenis_buku = DB::table('jenis_buku')->where('ID_jenis', $ID_jenis)->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'jenis_buku',
            'jenis_buku' => $jenis_buku
            );
        return view('perpus/edit_jenisBuku',['jenis_buku' => $jenis_buku], $data);
    }

    public function updateJenisBuku(Request $post){
 
        DB::table('jenis_buku')->where('ID_jenis', $post->ID_jenis)->update([
        'Nama_jenisbuku' => $post->nama_jenis,
        'Kode_jenisbuku' => $post->kode_jenis]);
 
        return redirect('/jenisBuku');
    }





    //==============================Penerbit==========================//
    public function indexPenerbit(){
        $penerbit = DB::table('penerbit')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'penerbit',
                'penerbit' => $penerbit
    	        );
            

        return view('perpus/penerbit', $data);
    }

    public function tambahPenerbit(){
        $penerbit = DB::table('penerbit')->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'penerbit',
            'penerbit' => $penerbit
            );
      
        return view('perpus/tambah_penerbit', $data);
        
    }

    public function insertDataPenerbit(Request $post){
        
        DB::table('penerbit')->insert([
        'Nama_penerbit' => $post->nama_penerbit,
        'Alamat_penerbit' => $post->alamat_penerbit,
        'No_telp_penerbit' => $post->no_telp,
        'Email_penerbit' => $post->email]);
            
        return redirect('/penerbit');
    }

    public function editPenerbit($ID_penerbit){
        $penerbit = DB::table('penerbit')->where('ID_penerbit', $ID_penerbit)->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'penerbit',
            'penerbit' => $penerbit
            );
        return view('perpus/edit_penerbit',['penerbit' => $penerbit], $data);
    }

    public function updatePenerbit(Request $post){
 
        DB::table('penerbit')->where('ID_penerbit', $post->ID_penerbit)->update([
        'Nama_penerbit' => $post->nama_penerbit,
        'Alamat_penerbit' => $post->alamat_penerbit,
        'No_telp_penerbit' => $post->no_telp,
        'Email_penerbit' => $post->email]);
 
        return redirect('/penerbit');
    }



    //==============================Bahasa==========================//
    public function indexBahasa(){
        $bahasa = DB::table('bahasa')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'bahasa',
                'bahasa' => $bahasa
    	        );
            

        return view('perpus/bahasa', $data);
    }

    public function tambahBahasa(){
        $bahasa = DB::table('bahasa')->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'bahasa',
            'bahasa' => $bahasa
            );
      
        return view('perpus/tambah_bahasa', $data);
        
    }

    public function insertDataBahasa(Request $post){
        
        DB::table('bahasa')->insert([
        'Nama_bahasa' => $post->bahasa]);
            
        return redirect('/bahasa');
    }

    public function editBahasa($ID_bahasa){
        $bahasa = DB::table('bahasa')->where('ID_bahasa', $ID_bahasa)->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'bahasa',
            'bahasa' => $bahasa
            );
        return view('perpus/edit_bahasa',['bahasa' => $bahasa], $data);
    }

    public function updateBahasa(Request $post){
 
        DB::table('bahasa')->where('ID_bahasa', $post->ID_bahasa)->update([
        'Nama_bahasa' => $post->bahasa]);
 
        return redirect('/bahasa');
    }

}
