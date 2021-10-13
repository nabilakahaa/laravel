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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about',function(){
    return '<h1>Hello</h1>'
    .'<br>Selamat datang di webapp saya'
    .'Laravel, emang keren';
});
Route::get('latihan',function(){
    $nama = "Abdul";
    return "Nama saya adalah <b>$nama</b>";
});
//route parameter
Route::get('post/{id}',function($a){
    return "Halaman post ke - $a";
});

//route parameter tugas
Route::get('bio/{nama}/{umur}/{alamat}',function($nama,$umur,$alamat){
    return "Nama : $nama <br>"
    . "umur : $umur <br>"
    . "Alamat : $alamat";
});

//route optional
Route::get('page/{page?}',function($halaman=1){
return "Halaman <b>$halaman</b>";
});
//buatlah route "pesan" dengnan optional parameter 
//makanan?,minuman?,cemilan?
//tidak diisi -> anda tidak memesan silahkan pulang
//makanan -> anda memesan makanan : ...
// makanan & minuman -> anda pesan makan : .... + minum ....
// makanan & minuman & cemilan-> anda pesan makan : .... + minum ....+cemilan....

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}',function ($a = null, $b = null, $c = null){
    if($a = null && $b = null && $c = null){
        $pesan = "Anda Tidak Pesan.Silahkan Pulang";
    }
if ($a != null) {
    $pesan = "Anda Memesan"
    . "<br>Makan : <b>$a</b>";
}
if ($a != null && $b != null){
    $pesan = "Anda Memesan"
    .<br>Makan : "<b>$a</b>"
    .<br>Minum : "<b>$b</b>";
}
if ($a != null && $b != null && $c != null){
    $pesan = "Anda Memesan"
    .<br>Makan : "<b>$a</b>"
    .<br>Minum : "<b>$b</b>"
    .<br>Cemilan : "<b>$c</b>";
}