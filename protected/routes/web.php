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

// Route::get('/',function (){return view('count/index');});
Route::get('/','DaftarController@index');
Route::get('/home', 'DaftarController@index');
Route::get('/alur', 'DaftarController@alur');
Route::get('/biaya', 'DaftarController@biaya');
Route::get('/form', 'DaftarController@form');
Route::get('/info', 'DaftarController@info');
Route::post('/daftar','DaftarController@daftar')->name('daftar');
Route::get('/berhasil',function (){return view('berhasil');});
//admin
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/pendaftar','AdminController@all');
Route::get('/rekap','AdminController@rekap');
//bendahara
Route::get('/bendahara','AdminController@bendahara');
Route::post('/bayar','AdminController@bayar');
Route::get('/sudahbayar','AdminController@sudahbayar');
Route::get('/unconfirm','AdminController@belumbayar');
Route::post('/bayars','AdminController@bayars');
Route::get('/alumnii/{id}','AdminController@alumnii');
Route::get('/alumnit/{id}','AdminController@alumnit');
//sekretaris
Route::get('/nis','AdminController@nis');
Route::get('/mukiml','AdminController@mukiml');
//cetak kartu dan formulir
Route::post('/cek','DaftarController@cek');
Route::post('/kartu','DaftarController@kartu');
Route::post('/buktif', 'DaftarController@buktif');
Route::post('/buktip', 'DaftarController@buktip');

Route::get('/test','DaftarController@test');
Route::get('/home', 'DaftarController@index')->name('home');

//No. Pondok
Route::get('/barul', 'AdminController@barul')->name('barul');
Route::get('/barup', 'AdminController@barup')->name('barup');
Route::get('/barul/{id}', 'AdminController@barulid');
Route::get('/barup/{id}', 'AdminController@barupid');

//no. induk
Route::get('/indukl', 'AdminController@indukl')->name('indukl');
Route::get('/indukp', 'AdminController@indukp')->name('indukp');
Route::get('/induklid/{id}', 'AdminController@induklid');
Route::get('/indukpid/{id}', 'AdminController@indukpid');

//report
Route::get('/reportbl', 'AdminController@reportbl');
Route::get('/reportbp', 'AdminController@reportbp');
Route::get('/reportal', 'AdminController@reportal');
Route::get('/reportap', 'AdminController@reportap');
Route::get('/reportll', 'AdminController@reportll');
Route::get('/reportlp', 'AdminController@reportlp');
Route::get('/reportol', 'AdminController@reportol');
Route::get('/reportop', 'AdminController@reportop');
Route::get('/reportnl', 'AdminController@reportnl');
Route::get('/reportnp', 'AdminController@reportnp');

Route::get('/petugas', 'AdminController@petugas');

//edit
Route::get('/edit', 'AdminController@edit')->name('edit');
Route::post('/edits', 'AdminController@edits');
Route::post('/fedit', 'AdminController@fedit');
Route::post('/simpan', 'AdminController@simpan')->name('simpan');

//lembaga
Route::post('/lembaga', 'AdminController@lembaga');
Route::post('/detail', 'AdminController@detail');
Route::get('/logout', 'AdminController@logout');

//santri
Route::get('/santri', 'AdminController@profile');
Route::get('/persiapan-test', 'AdminController@persiapan');
Route::get('/soal', 'AdminController@soal');
Route::post('/test', 'AdminController@test')->name('test');

//membuat peserta test
Route::get('/peserta', 'DaftarController@peserta');

//panitia soal
Route::get('/draftsoal', 'AdminController@draftsoal');
Route::get('/ps', 'DaftarController@ps');

//hasil test
Route::post('/nilai', 'AdminController@nilai');
Route::post('/nilaitotal', 'AdminController@nilaitotal');

//kelulusan
Route::get('/totalhasil1', 'AdminController@totalhasil1');
Route::post('/nilai1', 'AdminController@nilai1');
Route::post('/nilaitotal1', 'AdminController@nilaitotal1');
Route::post('/kelulusan', 'AdminController@kelulusan');

//mengundurkan diri
Route::get('/out',function (){return view('admin.out');});
Route::post('/outs','AdminController@out');
Route::post('/outx','AdminController@outx');

//daftar peserta
Route::get('/tahap12020','AdminController@tahap12020');
Route::get('/tahap22020','AdminController@tahap22020');
Route::get('/tahap32020','AdminController@tahap32020');
Route::get('/lulus12020','AdminController@lulus12020');
Route::get('/lulus22020','AdminController@lulus22020');

//total
Route::get('/totalwil', 'AdminController@totalwil');
Route::get('/wil/{kab}', 'AdminController@wil');



Route::get('/coba', 'DaftarController@coba');
Auth::routes();
