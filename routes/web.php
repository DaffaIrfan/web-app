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

Route::get('/nama', function () {
     return "Nama saya <b>Daffa Irfan Aditya</b>";
});

Route::get('/jurusan', function () {
    return "Jurusan <b>S1 Teknik Informatika</b>";
});

Route::get('/angkatan', function () {
    return "Angkatan <b>2018</b>";
});

Route::get('/universitas', function () {
    return "Muhammadiyah Kalimantan Timur";
});

Route::get('/semester', function () {
    return "Mahasiswa Semester 5";
});


Route::get("/utama/test", [UtamaController::class,"test"]);

use App\Http\Controllers\daffa1Controller;
Route::get("/daffa1/daffa", [daffa1Controller::class, "daffa"]);
Route::get("/daffa1/saya", [daffa1Controller::class, "saya"]);
Route::get("/daffa1/diit", [daffa1Controller::class, "diit"]);

use App\Http\Controllers\daffa2Controller;
Route::get("/daffa2/melu", [daffa2Controller::class, "melu"]);
Route::get("/daffa2/nangdi", [daffa2Controller::class, "nangdi"]);
Route::get("/daffa2/reneo", [daffa2Controller::class, "reneo"]);