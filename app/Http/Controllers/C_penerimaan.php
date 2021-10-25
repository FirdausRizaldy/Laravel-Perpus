<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_penerimaan extends Controller
{
    public function indexPenerimaan(){
        $penerimaan = DB::table('penerimaan')->get();
        
        $data = array(
                'menu' => 'transaksi',
                'submenu' => 'penerimaan',
                'penerimaan' => $penerimaan
    	        );
            

        return view('perpus/penerimaan', $data);
    }

    public function tambahPenerimaan(){
        $penerimaan = DB::table('penerimaan')->get();
        $pegawai = DB::table('pegawai')->get();
        $asal = DB::table('asal')->get();
        $data = array(
            'menu' => 'transaksi',
            'submenu' => 'penerimaan',
            'penerimaan' => $penerimaan
            );
      
        return view('perpus/tambah_penerimaan', $data,['asal' => $asal,'pegawai' => $pegawai]);
        
    }

    public function editPenerimaan($ID_penerimaan){
        $penerimaan = DB::table('penerimaan')->where('ID_penerimaan', $ID_penerimaan)->get();
        $pegawai = DB::table('pegawai')->get();
        $asal = DB::table('asal')->get();
        $data = array(
            'menu' => 'transaksi',
            'submenu' => 'penerimaan',
            'penerimaan' => $penerimaan
            );
        return view('perpus/edit_penerimaan',['penerimaan' => $penerimaan,'pegawai' => $pegawai,
        'asal' => $asal], $data);
    }

    public function insertDataPenerimaan(Request $post)
    {
        $id= 'ID_peminjaman';
        DB::table('penerimaan')->insert([
            'NIP' => $post->NIP,
            'ID_asal' => $post->ID_asal,
            'ID_penerimaan' => $post->ID_penerimaan,
            'Tanggal_penerimaan' => $post->Tanggal_penerimaan,
            'Jumlah_buku_diterima' => $post->Jumlah_buku_diterima,
            'Keterangan' => $post->Keterangan
        ]);

        return redirect('/penerimaan');
    }

    public function updatePenerimaan(Request $post){
 
        DB::table('penerimaan')->where('ID_penerimaan', $post->ID_penerimaan)->update([
            'NIP' => $post->NIP,
            'ID_asal' => $post->ID_asal,
            'ID_penerimaan' => $post->ID_penerimaan,
            'Tanggal_penerimaan' => $post->Tanggal_penerimaan,
            'Jumlah_buku_diterima' => $post->Jumlah_buku_diterima,
            'Keterangan' => $post->Keterangan]);
            
            return redirect('/penerimaan');
    }

}
