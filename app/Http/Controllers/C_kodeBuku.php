<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_kodeBuku extends Controller
{
    public function indexEksemplar(){
        $kode= DB::table('eksemplar_buku')->join('buku','buku.No_ISBN','=','eksemplar_buku.No_ISBN')
        //->where('eksemplar_buku.No_ISBN','LIKE','buku.No_ISBN')
        ->get();
        $buku = DB::table('buku')->get();
        
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'kode',
            'kode' => $kode
            );
        

    return view('perpus/kode_buku',$data,);
    }
    
    public function indexEksemplarAnggota($ID_peminjaman){
        $kode= DB::table('eksemplar_buku')->join('buku','buku.No_ISBN','=','eksemplar_buku.No_ISBN')->get();
        $peminjaman= DB::table('peminjaman')->where('ID_peminjaman', $ID_peminjaman)->get();
        
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'kode',
            'kode' => $kode,$peminjaman
            );
        

    return view('anggota/peminjamanBukuKode', $data, ['peminjaman' => $peminjaman]);
    }

    public function tambahEksemplar(){
        $buku = DB::table('buku')->get();
        $kode = DB::table('eksemplar_buku')->get();
        $data = array(
            'menu' => 'data_buku',
            'submenu' => 'kode',
            'kode' => $kode, $buku
            );
      
        return view('perpus/tambah_eksemplar', $data, ['buku' => $buku]);
        
    }
    
    public function insertDataEksemplar(Request $post){
        
        DB::table('eksemplar_buku')->insert([
            'No_ISBN' => $post->No_ISBN,
            'Status_eksemplar' => $post->Status_eksemplar,
            'Kondisi_eksemplar' => $post->Kondisi_eksemplar]);
            
            return redirect('/eksemplar');
        }
        
        public function editEksemplar($Kode_buku){
            $kode = DB::table('eksemplar_buku')->where('Kode_buku', $Kode_buku)->get();
            $data = array(
                'menu' => 'data_buku',
                'submenu' => 'kode',
                'kode' => $kode
                );
          
            return view('perpus/edit_eksemplar', $data, ['kode' => $kode]);  
        }

        public function updateDataEksemplar(Request $post){
 
            DB::table('eksemplar_buku')->where('Kode_buku', $post->Kode_buku)->update([
                'No_ISBN' => $post->No_ISBN,
                'Status_eksemplar' => $post->Status_eksemplar,
                'Kondisi_eksemplar' => $post->Kondisi_eksemplar]);
                
                return redirect('/eksemplar');
        }

        public function detailPeminjaman( $ID_peminjaman,$Kode_buku){
        
        $kode = DB::table('eksemplar_buku')->where('Kode_buku', $Kode_buku)->get();
        $peminjaman= DB::table('peminjaman')->where('ID_peminjaman', $ID_peminjaman)->get();
        $data = array(
                'menu' => 'data_buku',
                'submenu' => 'buku',
                'peminjaman' => $peminjaman, 
                'kode' => $kode
    	        );
            

        return view('anggota/formpinjamBuku', $data, ['kode' => $kode, 'peminjaman' => $peminjaman]);
    }

    public function insertHistory(Request $post){
        //DB::table('peminjaman')->get();
        DB::table('detail_peminjaman')->insert([
            'ID_peminjaman' => $post->ID_peminjaman,
            'Kode_buku' => $post->Kode_buku,
            'Status_peminjaman' => $post->Status_peminjaman,
            'Denda_perbuku' => $post->Denda_perbuku,
            'Tgl_haruskembali' => $post->Tgl_haruskembali,
            'Tgl_kembali' => $post->Tgl_kembali,
            'Perpanjangan' => $post->Perpanjangan,
            'Status_verifikasi' => $post->Status_verifikasi    
        ]);

        return redirect('/anggota/history');
    }

}
