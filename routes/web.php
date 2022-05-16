<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\ViewController::class, 'portal_view']);
Route::get('/tkj', [App\Http\Controllers\ViewController::class, 'tkj_view']);
Route::get('/mm', [App\Http\Controllers\ViewController::class, 'mm_view']);
Route::get('/rpl', [App\Http\Controllers\ViewController::class, 'rpl_view']);
Route::get('/perhotelan', [App\Http\Controllers\ViewController::class, 'perhotelan_view']);
Route::get('/jasa-boga', [App\Http\Controllers\ViewController::class, 'jasaboga_view']);
Route::get('/bisnis-daring-&-pemasaran', [App\Http\Controllers\ViewController::class, 'bdp_view']);
Route::get('/akuntansi-&-keuangan-lembaga', [App\Http\Controllers\ViewController::class, 'akl_view']);
Route::get('/otomatisasi-tata-kelola-perkantoran', [App\Http\Controllers\ViewController::class, 'otkp_view']);
Route::get('/tenaga-kerja', [App\Http\Controllers\ViewController::class, 'tenaga_kerja_view']);
Route::get('/streaming', [App\Http\Controllers\ViewController::class, 'streaming_view']);
// Route::get('/streaming_guru', [App\Http\Controllers\guru::class, 'streaming_view'])->name('guru')->middleware('guru');
Route::get('/streaming_kajur', [App\Http\Controllers\kajur::class, 'streaming_view'])->name('kajur')->middleware('admin');
Route::post('/tambah_streaming', [App\Http\Controllers\kajur::class, 'post']);

Route::get('/kontak', [App\Http\Controllers\ViewController::class, 'kontak_view']);
Route::get('/galeri', [App\Http\Controllers\ViewController::class, 'galeri_view']);
Route::get('/alumni', [App\Http\Controllers\ViewController::class, 'alumni_view']);
Route::get('/qiraat-lagu', [App\Http\Controllers\ViewController::class, 'qiraat_view']);
Route::get('/berita', [App\Http\Controllers\ViewController::class, 'berita_view']);
Route::get('/login', [App\Http\Controllers\login::class, 'index']);
Route::get('/logout', [App\Http\Controllers\login::class, 'logout']);
Route::get('/acara-lomba-17-agustus', function () {
    return view('detail_berita.detail_berita');
});

Route::post('/login', [App\Http\Controllers\login::class, 'cek']);


Route::post('/kontak', [App\Http\Controllers\ContacController::class, 'sendContact']);
Route::delete('delete_streaming/{id}', [App\Http\Controllers\kajur::class, 'delete']);