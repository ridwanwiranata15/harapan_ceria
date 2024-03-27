<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatienController;
use App\Models\Dokter;
use App\Models\Pasien;

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

Route::get('/', [DoctorController::class, 'Home']);
Route::post('/create-doctor', [DoctorController::class, 'create']);
Route::patch('/edit-doctor/{id}', [DoctorController::class, 'edit']);
Route::delete('/delete-doctor/{id}', [DoctorController::class, 'delete']);

Route::get('/pasien', [PatienController::class, 'index']);
Route::patch('/edit-patien/{id}', [PatienController::class, 'edit']);
Route::post('/create-patien', [PatienController::class, 'create']);
Route::get('detail-child/{id}', [PatienController::class, 'detail_child']);
Route::post('/create-parent/{id}', [PatienController::class, 'create_parent']);
