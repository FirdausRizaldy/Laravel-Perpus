<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_history extends Controller
{
    /*public function indexPeminjamanBuku(){
        $data = array(
                'menu' => 'history',
                'submenu' => 'peminjamanBuku'
    	        );
            

        return view('perpus/his_peminjamanBuku', $data);
    }*/

    public function pengembalian(){

        $data = array(
            'menu' => 'transaksi',
            'submenu' => 'pengembalian'
            );
        $detail_peminjaman = DB::table('detail_peminjaman')
        ->where('detail_peminjaman.Tgl_kembali','LIKE', '%%')
        ->get();
        $anggota = DB::table('anggota')
        ->join('peminjaman', 'anggota.NIS_NIP', '=', 'peminjaman.NIS_NIP')
        ->join('detail_peminjaman', 'detail_peminjaman.ID_peminjaman', '=', 'peminjaman.ID_peminjaman')
        ->join('eksemplar_buku','eksemplar_buku.Kode_buku','=','detail_peminjaman.Kode_buku')
        ->join('buku','buku.no_ISBN','=','eksemplar_buku.no_ISBN')
        ->where('detail_peminjaman.Tgl_kembali','LIKE', '%0%')
        ->get();
        return view('perpus/pengembalian', ['anggota' => $anggota,'detail_peminjaman' =>  $detail_peminjaman], $data);
    }

    public function editPengembalian($ID_peminjaman, $Kode_buku){
        $pengembalian = DB::table('detail_peminjaman')
        ->where('Kode_buku', $Kode_buku)
        ->where('ID_peminjaman', $ID_peminjaman)
        ->get();
        $data = array(
            'menu' => 'transaksi',
            'submenu' => 'pengembalian',
            'detail_peminjaman' => $pengembalian
            );
        return view('perpus/edit_pengembalian',['detail_peminjaman' => $pengembalian], $data);

    }

    public function UpdatePengembalian(Request $post)
    {
        DB::table('detail_peminjaman')->where('ID_peminjaman', $post->ID_peminjaman)->update([
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


    
    public function indexPeminjamanAnggota(){
        $data = array(
                'menu' => 'history',
                'submenu' => 'peminjamanAnggota'
    	        );
            

        return view('perpus/his_peminjamanAnggota', $data);
    }
    

    public function cariAnggota(){

        $data = array(
            'menu' => 'history',
            'submenu' => 'peminjamanAnggota'
            );

        $anggota = DB::table('anggota')
        ->join('peminjaman', 'anggota.NIS_NIP', '=', 'peminjaman.NIS_NIP')
        ->join('detail_peminjaman', 'detail_peminjaman.ID_peminjaman', '=', 'peminjaman.ID_peminjaman')
        ->join('eksemplar_buku','eksemplar_buku.Kode_buku','=','detail_peminjaman.Kode_buku')
        ->join('buku','buku.no_ISBN','=','eksemplar_buku.no_ISBN')
        
        ->get();
        return view('perpus/his_peminjamanAnggota', ['anggota' => $anggota], $data);
    }

    public function cariAnggotaUp(Request $req){

        $data = array(
            'menu' => 'history',
            'submenu' => 'peminjamanAnggota'
            );

        $anggota = DB::table('anggota')
        ->join('peminjaman', 'anggota.NIS_NIP', '=', 'peminjaman.NIS_NIP')
        ->join('detail_peminjaman', 'detail_peminjaman.ID_peminjaman', '=', 'peminjaman.ID_peminjaman')
        ->join('eksemplar_buku','eksemplar_buku.Kode_buku','=','detail_peminjaman.Kode_buku')
        ->join('buku','buku.no_ISBN','=','eksemplar_buku.no_ISBN')
        ->where('peminjaman.nis_nip','LIKE', '%'.$req->inp.'%')
        ->orWhere('anggota.nama_anggota','LIKE','%'.$req->inp.'%')
        ->get();
        return view('perpus/his_peminjamanAnggota', ['anggota' => $anggota], $data);

    }
    
    public function cariBuku(){
        $data = array(
            'menu' => 'history',
            'submenu' => 'peminjamanBuku'
            );

        $buku = DB::table('buku')
        ->join('eksemplar_buku','buku.No_ISBN','=','eksemplar_buku.No_ISBN')
        ->join('detail_peminjaman','eksemplar_buku.Kode_buku','=','detail_peminjaman.Kode_buku')
        ->join('peminjaman', 'peminjaman.ID_peminjaman', '=', 'detail_peminjaman.ID_peminjaman')
        ->join('anggota', 'anggota.NIS_NIP', '=', 'peminjaman.NIS_NIP')

        ->get();
        return view('perpus/his_peminjamanBuku', ['buku' => $buku], $data);
    }

    public function cariBukuUp(Request $req){
        $data = array(
            'menu' => 'history',
            'submenu' => 'peminjamanBuku'
            );

        $buku = DB::table('buku')
        ->join('eksemplar_buku','buku.no_ISBN','=','eksemplar_buku.no_ISBN')
        ->join('detail_peminjaman','eksemplar_buku.Kode_buku','=','detail_peminjaman.Kode_buku')
        ->join('peminjaman', 'peminjaman.ID_peminjaman', '=', 'detail_peminjaman.ID_peminjaman')
        ->join('anggota', 'anggota.NIS_NIP', '=', 'peminjaman.NIS_NIP')
        ->where('buku.no_ISBN','LIKE','%'.$req->inp.'%')
        ->orWhere('buku.Judul_buku','LIKE','%'.$req->inp.'%')
        
        ->get();
        return view('perpus/his_peminjamanBuku', ['buku' => $buku], $data);
    
    }
    


}
