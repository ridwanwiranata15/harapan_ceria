<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatienController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\Imunisation;
use App\Http\Controllers\JanjiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MedisController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RawatController;
use App\Http\Controllers\AuthController;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Imunisasi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DoctorController::class, 'Home']);
    Route::post('/create-doctor', [DoctorController::class, 'create']);
    Route::patch('/edit-doctor/{id}', [DoctorController::class, 'edit']);
    Route::delete('/delete-doctor/{id}', [DoctorController::class, 'delete']);

    Route::get('/pasien', [PatienController::class, 'index']);
    Route::patch('/edit-patien/{id}', [PatienController::class, 'edit']);
    Route::post('/create-patien', [PatienController::class, 'create']);
    Route::get('detail-child/{id}', [ChildrenController::class, 'detail_child']);
    Route::post('/create-parent/{id}', [ChildrenController::class, 'create_parent']);
    Route::delete('/delete-parent/{id}', [ChildrenController::class, 'delete_parent']);
    Route::post('/add_antibody/{id}', [ChildrenController::class, 'add_antibody']);
    Route::delete('/imunisasi/delete/{id}', [ChildrenController::class, 'destroy_antibody']);
    Route::post('history/{id}', [ChildrenController::class, 'Riwayat_kesehatan_anak']);
    Route::delete('/history/delete/{id}', [ChildrenController::class, 'delete_history']);
    Route::post('/assesmen_gizi/{id}', [ChildrenController::class, 'assesmen_gizi_create']);
    Route::delete('/assesmen_gizi/{id}/destroy', [ChildrenController::class, 'assesmen_gizi_destroy']);
    Route::post('/perkembangan_dan_pertumbuhan/{id}', [ChildrenController::class, 'perkembangan_dan_pertumbuhan']);
    Route::patch('/edit-parent/{id}', [ChildrenController::class, 'edit_parent']);
    Route::patch('/edit-antibody/{id}', [ChildrenController::class, 'edit_antibody']);
    Route::patch('/edit-history/{id}', [ChildrenController::class, 'edit_history']);
    Route::patch('/edit-nutrition/{id}', [ChildrenController::class, 'edit_nutrition']);
    Route::patch('/edit-tumbuh/{id}', [ChildrenController::class, 'edit_tumbuh']);
    Route::delete('/tumbuh/{id}/destroy', [ChildrenController::class, 'tumbuh_destroy']);
    Route::get('/poli', [PoliController::class, 'index']);
    Route::post('/create-poli', [PoliController::class, 'create']);
    Route::patch('/edit-poli/{id}', [PoliController::class, 'edit']);
    Route::delete('/delete-poli/{id}', [PoliController::class, 'destroy']);
    Route::get('/jadwal', [jadwalController::class, 'index']);
    Route::post('/create-jadwal', [JadwalController::class, 'create']);
    Route::patch('/update-jadwal/{id}', [JadwalController::class, 'edit']);
    Route::delete('/delete-jadwal/{id}', [JadwalController::class, 'destroy']);
    Route::get('/daftar', [DaftarController::class, 'index']);
    Route::patch('/edit-daftar/{id}', [DaftarController::class, 'edit']);
    Route::post('/create-daftar', [DaftarController::class, 'create']);
    Route::delete('/delete-daftar/{id}', [DaftarController::class, 'delete']);

    Route::get('/medis', [MedisController::class, 'index']);
    Route::post('/create-medis', [MedisController::class, 'create']);
    Route::patch('/edit-medis/{id}', [MedisController::class, 'edit']);
    Route::delete('/delete-medis/{id}', [MedisController::class, 'destroy']);

    Route::get('/obat', [ObatController::class, 'index']);
    Route::post('/create-obat', [ObatController::class, 'create']);
    Route::patch('/edit-obat/{id}', [ObatController::class, 'edit']);
    Route::delete('/delete-obat/{id}', [ObatController::class, 'destroy']);

    Route::get('/rawat', [RawatController::class, 'index']);
    Route::post('/create-rawat', [RawatController::class, 'create']);
    Route::patch('/edit-rawat/{id}', [RawatController::class, 'edit']);
    Route::delete('/delete-rawat/{id}', [RawatController::class, 'delete']);

    Route::get('profile', function(){
        return view('profile');
    });
});


Route::get('register', function () {
    return view('register');
});
Route::post('signup', [AuthController::class, 'signup']);
Route::post('signin', [AuthController::class, 'signin']);
Route::get('login', function () { return view('login');})->name('login');
Route::get('logout', [AuthController::class, 'logout']);
