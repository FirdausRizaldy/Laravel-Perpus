<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_peminjaman extends Controller
{
    public function indexPeminjaman(){
        $peminjaman = DB::table('peminjaman')->get();

        $data = array(
                'menu' => 'transaksi',
                'submenu' => 'peminjaman',
                'peminjaman' => $peminjaman
    	        );
            

        return view('perpus/peminjaman', $data);
    }
    public function indexPeminjamanAnggota(){
        $peminjaman = DB::table('peminjaman')->get();

        $data = array(
                'menu' => 'peminjaman',
                'submenu' => '',
                'peminjaman' => $peminjaman
    	        );
            

        return view('anggota/peminjaman', $data);
    }

    public function tambahPeminjaman($No_ISBN){
        $peminjaman = DB::table('peminjaman')->get();
        //$eksemplar_buku= DB::table('eksemplar_buku')->join('buku','buku.No_ISBN','=','eksemplar_buku.No_ISBN')
        //->get();
        $pegawai = DB::table('pegawai')->get();
        $anggota = DB::table('anggota')->get();
        $buku = DB::table('buku')->where('No_ISBN', $No_ISBN)->get();
        $data = array(
            'menu' => 'transaksi',
            'submenu' => 'peminjaman',
            'peminjaman' => $peminjaman
            );
        
      
        return view('perpus/tambah_peminjaman', $data,['buku' => $buku,'peminjaman' => $peminjaman,'anggota' => $anggota,'pegawai' => $pegawai]);
        
    }

    public function insertDataPeminjaman(Request $post){
        
        DB::table('peminjaman')->insert([
        'ID_peminjaman' => $post->ID_peminjaman,
        'NIP' => $post->NIP,
        'NIS_NIP' => $post->NIS_NIP,
        'Jumlah_buku' => $post->Jumlah_buku,
        'Tgl_pinjam' => $post->Tgl_pinjam]);
            
        return redirect('/peminjaman/tambahdetail');
    }

    public function editPeminjaman($ID_peminjaman){
        
        $peminjaman = DB::table('peminjaman')->where('ID_peminjaman', $ID_peminjaman)->get();
        $pegawai = DB::table('pegawai')->get();
        $anggota = DB::table('anggota')->get();
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $users = DB::table('peminjaman')->select('ID_peminjaman')->limit('1')->orderBy('ID_peminjaman', 'DESC')->get();
        $data = array(
            'menu' => 'transaksi',
            'submenu' => 'peminjaman',
            'peminjaman' => $peminjaman
            );
        
        return view('perpus/edit_peminjaman',['peminjaman' => $peminjaman,'users' => $users,
        'anggota' => $anggota,'eksemplar_buku'=> $eksemplar_buku,'pegawai' => $pegawai], $data);
    }

    public function updatePeminjaman(Request $post){
 
        DB::table('peminjaman')->where('ID_peminjaman', $post->ID_peminjaman)->update([
            'ID_peminjaman' => $post->ID_peminjaman,
            'NIP' => $post->NIP,
            'NIS_NIP' => $post->NIS_NIP,
            'Jumlah_buku' => $post->Jumlah_buku,
            'Tgl_pinjam' => $post->Tgl_pinjam]);
 
        return redirect('/peminjaman');
    }

    public function tambahDetail(Request $request)
    {
        $peminjaman = DB::table('peminjaman')->get();
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $users = DB::table('peminjaman')->select('ID_peminjaman')->limit('1')->orderBy('ID_peminjaman', 'DESC')->get();
        $data = array(
            'menu' => 'transaksi',
            'submenu' => 'peminjaman',
            'peminjaman' => $peminjaman,
            'eksemplar_buku'=> $eksemplar_buku,
            
        );
        
        return view('perpus/tambah_hist', $data, ['data'=> $request,'users' => $users]);
    }
    
    public function insertDetail(Request $post)
    {
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
            return redirect('/history/peminjamanBuku');
        }

}



