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

Route::get('/about', function () {

    $nama = "Izzan";
    $jk = "Laki-laki";
    $pendidikan_terakhir = "SMP";
    $pekerjaan = "Miliarder";
    $alamat = "Rancamanyar";


    return view('data_diri',compact('nama','jk','pendidikan_terakhir','pekerjaan','alamat'));
});
Route::get('/biodata', function () {

    $nama1 = "ghani";
    $ttl = "1 januari 1945";
    $jk1 = "Laki-laki";
    $alamat1 = "Rancamanyar";
    $hobi = "Mengaji";
    $cita2 = "Pengusaha sukses";
    


    return view('biodata',compact('nama1','ttl','jk1','alamat1','hobi','cita2'));
});

