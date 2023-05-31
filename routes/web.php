<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComponenController;
use App\Http\Controllers\UserController;
use Barryvdh\DomPDF\Facade\Pdf;

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




Route::post('/login-auth', [LoginController::class, 'login']);
Route::post('/register-auth', [LoginController::class, 'addUser']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route::post('/komputer/create', [KomputerController::class, 'create'])->name('komputer_create');
Route::put('/komputer/update/{id}', [KomputerController::class, 'update'])->name('komputer_update');
Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('edit_user');
Route::post('/create-data', [KegiatanController::class, 'create'])->name('create');
Route::get('/delete-data', [KegiatanController::class, 'destroy'])->name('delete');

Route::get('/login', [LoginController::class, 'index']);
Route::get('/landingpage', [LoginController::class, 'landingpage']);




Route::middleware(['web', 'auth', 'cekRole:admin'])->group(function () {
    Route::get('/daftar_pc', [KomputerController::class, 'index']);
    Route::get('/', [ComponenController::class, 'index']);
    Route::get('/register', [LoginController::class, 'register']);
    Route::get('/profile', [UserController::class, 'index']);
    Route::get('/edit-password/{id}', [UserController::class, 'edit']);
    Route::get('/add-kegiatan', [KegiatanController::class, 'index']);
    Route::get('/detail/{id}', [MaintenanceController::class, 'index']);
    Route::get('/export-pdf/{id}', [MaintenanceController::class, 'exportPDF']);
    Route::get('/komputer/update/{id}/edit', [KomputerController::class, 'edit'])->name('komputer_edit');
});


Route::middleware(['web', 'auth', 'cekRole:user'])->group(function () {
    Route::get('/daftar_pc', [KomputerController::class, 'index']);
    Route::get('/', [ComponenController::class, 'index']);
    Route::get('/profile', [UserController::class, 'index']);
    Route::get('/edit-password/{id}', [UserController::class, 'edit']);
    Route::get('/add-kegiatan', [KegiatanController::class, 'index']);
    Route::get('/detail/{id}', [MaintenanceController::class, 'index']);
    Route::get('/export-pdf/{id}', [MaintenanceController::class, 'exportPDF']);
    Route::get('/komputer/update/{id}/edit', [KomputerController::class, 'edit'])->name('komputer_edit');
});




