<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class C_siswa extends Controller
{
    public function home(){
        $data = array(
                'menu' => 'home',
                'submenu' => ''
    	        );
            

        return view('anggota/blank_page_anggota', $data);
    }

    public function indexBuku(){
        $buku = DB::table('buku')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'buku',
                'buku' => $buku
    	        );
            

        return view('anggota/buku', $data);
    }

    public function indexJenisBuku(){
        $jenis_buku = DB::table('jenis_buku')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'jenis_buku',
                'jenis_buku' => $jenis_buku
    	        );
            

        return view('anggota/jenis_buku', $data);
    }

    public function indexPenerbit(){
        $penerbit = DB::table('penerbit')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'penerbit',
                'penerbit' => $penerbit
    	        );
            

        return view('anggota/penerbit', $data);
    }

    public function indexBahasa(){
        $bahasa = DB::table('bahasa')->get();

        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'bahasa',
                'bahasa' => $bahasa
    	        );
            

        return view('anggota/bahasa', $data);
    }

    public function indexPeminjaman(){
        $data = array(
                'menu' => 'peminjaman',
                'submenu' => ''
    	        );
            

        return view('anggota/peminjaman', $data);
    }

    public function indexHistory(){
        $data = array(
                'menu' => 'history',
                'submenu' => ''
                );
                $cari=Auth::user()->name;
                $anggota = DB::table('anggota')
                ->join('peminjaman', 'anggota.NIS_NIP', '=', 'peminjaman.NIS_NIP')
                ->join('detail_peminjaman', 'detail_peminjaman.ID_peminjaman', '=', 'peminjaman.ID_peminjaman')
                ->join('eksemplar_buku','eksemplar_buku.Kode_buku','=','detail_peminjaman.Kode_buku')
                ->join('buku','buku.no_ISBN','=','eksemplar_buku.no_ISBN')
                ->where('anggota.nama_anggota','LIKE','%'.$cari.'%')
                ->get();
            

        return view('anggota/history', $data, ['anggota' => $anggota]);
    }

    public function peminjaman($No_ISBN){
        $pegawai = DB::table('pegawai')->get();
        $buku = DB::table('buku')->where('No_ISBN', $No_ISBN)->get();
        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'buku',
                'pegawai' => $pegawai
    	        );
            

        return view('anggota/pinjambuku', $data, ['buku' => $buku]);
    }
    
    public function insertPeminjaman(Request $post)
    {
        $id= 'ID_peminjaman';
        DB::table('peminjaman')->insert([
            'NIP' => $post->NIP,
            'NIS_NIP' => $post->NIS_NIP,
            'ID_peminjaman' => $post->ID_peminjaman,
            'Jumlah_buku' => $post->Jumlah_buku,
            'Tgl_pinjam' => $post->Tgl_pinjam,
        ]);

        return redirect('/anggota/buku');
    }
    
    
    
    
    

}
