
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('home', function () {
    return view('welcome');
});

Route::get('hi', function() {
    return 'Selamat Datang Selamat Belajar';
});

Route::get('view', function(){
    return view('webtest');
});

Route::get('id/{id}', function($id){
    echo 'ID mu : ' .$id;
});

Route::get('controller', 'MyfirstController@index');

Route::get('tampilnama', 'MyfirstController@nama');

Route::get('matkul', 'MyfirstController@matkul');

Route::get('getname/{nama}', 'MyfirstController@getNameFromUr1');

Route::get('formulir', 'MyfirstController@formulir');
Route::post('formulir/proses', 'MyfirstController@proses');

Route::get('home', 'MyfirstController@home');
Route::get('tentang', 'MyfirstController@tentang');*/

//boostreap
//Route::get('/loginPegawai', function(){
//    return view('perpus/login');
//});

//Route::post('/loginPegawai', function(){
//    return view('perpus/login');
//});

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return redirect ('/loginPegawai');
});

Route::get('/regis', function(){
    return view('perpus/regis');
});

Route::get('/forgot_pass', function(){
    return view('perpus/forgot_pass');
});

Route::post('/recover_pass', function(){
    return view('perpus/recover_pass');
});

//query
Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::post('/blankPage', 'C_customer@home');
    Route::get('/blankPage', 'C_customer@home');
    
Route::get('/customer', 'C_customer@index');
    
Route::get('/customer/tambah_cust', 'C_customer@tambahCustomer');
    
    
Route::get('/customer/tambahCustomer', 'C_customer@tambahCustomer');
route::post('/customer/insertData', 'C_customer@insertData');
    
Route::post('/pegawai', 'C_pegawai@index');
Route::get('/pegawai', 'C_pegawai@index');
Route::get('/pegawai/tambah_peg', 'C_pegawai@tambahPegawai');
Route::post('/pegawai/insertDataPeg', 'C_pegawai@insertDataPeg');
Route::get('/pegawai/edit/{NIP}', 'C_pegawai@editPegawai');
Route::post('/pegawai/updatePegawai','C_pegawai@updatePegawai');

Route::post('/anggota', 'C_anggota@index');
Route::get('/anggota', 'C_anggota@index');
Route::get('/anggota/tambahAnggota', 'C_anggota@tambahAnggota');
Route::post('/anggota/insertDataAnggota', 'C_anggota@insertData');
Route::get('anggota/edit/{nis}', 'C_anggota@editAnggota');
Route::post('/anggota/updateAnggota', 'C_anggota@updateAnggota');

Route::post('/buku', 'C_dataBuku@indexBuku');
Route::get('/buku', 'C_dataBuku@indexBuku');
Route::get('/buku/tambahBuku', 'C_dataBuku@tambahBuku');
Route::post('/buku/insertDataBuku', 'C_dataBuku@insertDataBuku');
Route::get('/buku/edit/{no_isbn}', 'C_dataBuku@editBuku');
Route::post('/buku/updateBuku', 'C_dataBuku@updateBuku');

Route::post('/jenisBuku', 'C_dataBuku@indexJenisBuku');
Route::get('/jenisBuku', 'C_dataBuku@indexJenisBuku');
Route::get('/jenisBuku/tambahJenisBuku', 'C_dataBuku@tambahJenisBuku');
Route::post('/jenisBuku/insertDataJenisBuku', 'C_dataBuku@insertDataJenisBuku');
Route::get('/jenisBuku/edit/{id_jenis}', 'C_dataBuku@editJenisBuku');
Route::post('/jenisBuku/updateJenisBuku', 'C_dataBuku@updateJenisBuku');

Route::post('/penerbit', 'C_dataBuku@indexPenerbit');
Route::get('/penerbit', 'C_dataBuku@indexPenerbit');
Route::get('/penerbit/tambahPenerbit', 'C_dataBuku@tambahPenerbit');
Route::post('/penerbit/insertDataPenerbit', 'C_dataBuku@insertDataPenerbit');
Route::get('/penerbit/edit/{id_penerbit}', 'C_dataBuku@editPenerbit');
Route::post('/penerbit/updatePenerbit', 'C_dataBuku@updatePenerbit');

Route::post('/bahasa', 'C_dataBuku@indexBahasa');
Route::get('/bahasa', 'C_dataBuku@indexBahasa');
Route::get('/bahasa/tambahBahasa', 'C_dataBuku@tambahBahasa');
Route::post('/bahasa/insertDataBahasa', 'C_dataBuku@insertDataBahasa');
Route::get('/bahasa/edit/{id_bahasa}', 'C_dataBuku@editBahasa');
Route::post('/bahasa/updateBahasa', 'C_dataBuku@updateBahasa');

Route::get('/eksemplar', 'C_kodeBuku@indexEksemplar');
Route::get('/eksemplar/tambahEksemplar', 'C_kodeBuku@tambahEksemplar');
Route::post('/eksemplar/insertDataEksemplar', 'C_kodeBuku@insertDataEksemplar');
Route::get('/eksemplar/edit/{Kode_buku}', 'C_kodeBuku@editEksemplar');
Route::post('/eksemplar/updateEksemplar', 'C_kodeBuku@updateDataEksemplar');

Route::post('/penerimaan', 'C_penerimaan@indexPenerimaan');
Route::get('/penerimaan', 'C_penerimaan@indexPenerimaan');
Route::get('/penerimaan/tambahPenerimaan', 'C_penerimaan@tambahPenerimaan');
Route::post('/penerimaan/insertDataPenerimaan', 'C_penerimaan@insertDataPenerimaan');
Route::get('/penerimaan/edit/{id_penerimaan}', 'C_penerimaan@editPenerimaan');
Route::post('/penerimaan/updatePenerimaan', 'C_penerimaan@updatePenerimaan');

Route::post('/peminjaman', 'C_peminjaman@indexPeminjaman');
Route::get('/peminjaman', 'C_peminjaman@indexPeminjaman');
Route::get('/peminjaman/tambahPeminjaman/{No_ISBN}', 'C_peminjaman@tambahPeminjaman');
Route::post('/peminjaman/insertDataPeminjaman', 'C_peminjaman@insertDataPeminjaman');
Route::get('/peminjaman/edit/{id_peminjaman}', 'C_peminjaman@editPeminjaman');
Route::post('/peminjaman/updatePeminjaman', 'C_peminjaman@updatePeminjaman');

//detail peminjaman
Route::get('/peminjaman/tambahdetail', 'C_peminjaman@tambahDetail');
Route::post('/peminjaman/insertdetail', 'C_peminjaman@insertDetail');


Route::get('/history/peminjamanBuku', 'C_history@cariBuku');
Route::get('/history/peminjamanBukuID', 'C_history@cariBukuUp');
Route::get('/history/peminjamanAnggota', 'C_history@cariAnggota');
Route::get('/history/peminjamanAnggotaID', 'C_history@cariAnggotaUp');

Route::get('/pengembalian', 'C_history@pengembalian');
Route::get('/pengembalian/edit/{ID_peminjaman}/{No_ISBN}', 'C_history@editPengembalian');
Route::post('/pengembalian/updatePengembalian', 'C_history@UpdatePengembalian');

Route::get('/peminjaman/{ID_pemminjaman}', 'C_kodeBuku@indexEksemplarAnggota');
Route::get('/peminjaman/{ID_pemminjaman}/{Kode_buku}', 'C_kodeBuku@detailPeminjaman');

});


Route::get('/loginPegawai', 'C_auth_login@preLogin')->name('login');
Route::post('/post_login', 'C_auth_login@postLogin');
Route::get('/pegister', 'C_auth_login@preRegister');
Route::post('/post_register', 'C_auth_login@postRegister');
Route::get('/logout', 'C_auth_login@Logout');

//==========================Siswa==========================
Route::get('/loginAnggota', function(){
    return view('anggota/loginanggota');
});

Route::post('/loginAnggota', function(){
    return view('anggota/loginanggota');
});
Route::post('/blankPageAnggota', 'C_siswa@home');
Route::get('/blankPageAnggota', 'C_siswa@home');

Route::get('/anggota/buku', 'C_siswa@indexBuku');
Route::get('/anggota/jenisBuku', 'C_siswa@indexJenisBuku');
Route::get('/anggota/penerbit', 'C_siswa@indexPenerbit');
Route::get('/anggota/bahasa', 'C_siswa@indexBahasa');
Route::get('/anggota/peminjaman', 'C_peminjaman@indexPeminjamanAnggota');
Route::get('/anggota/pinjam/{No_ISBN}', 'C_siswa@peminjaman');
Route::get('/anggota/pinjam/insertPeminjaman', 'C_siswa@insertPeminjaman');
Route::post('/anggota/pinjam/insertPeminjaman', 'C_siswa@insertPeminjaman');
Route::post('/anggota/pinjam/insertHistory', 'C_kodeBuku@insertHistory');
Route::get('/anggota/pinjam/insertHistory', 'C_kodeBuku@detailPeminjaman');
Route::get('/anggota/history', 'C_siswa@indexHistory');

Route::get('formlay', function () {
    return view('formlayout');
});