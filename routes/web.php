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
// Route::get('detail/{id}', function() {
//     $pdf = Pdf::loadView('read.index');
//     return $pdf->download('read.index.pdf');
// });



Route::group(['middleware' => ['web', 'cekRole:admin']], function () {
    Route::get('/daftar_pc', [KomputerController::class, 'index'])->middleware('auth');
    Route::get('/', [ComponenController::class, 'index'])->middleware('auth');
    Route::get('/register', [LoginController::class, 'register'])->middleware('auth');
    Route::get('/profile', [UserController::class, 'index'])->middleware('auth');
    Route::get('/edit-password/{id}', [UserController::class, 'edit'])->middleware('auth');
    Route::get('/add-kegiatan', [KegiatanController::class, 'index'])->middleware('auth');
    Route::get('/detail/{id}', [MaintenanceController::class, 'index'])->middleware('auth');
    Route::get('/export-pdf/{id}', [MaintenanceController::class, 'exportPDF'])->middleware('auth');
    Route::get('/komputer/update/{id}/edit', [KomputerController::class, 'edit'])->name('komputer_edit')->middleware('auth');
});

Route::group(['middleware' => ['web', 'cekRole:user']], function () {
    Route::get('/daftar_pc', [KomputerController::class, 'index'])->middleware('auth');
    Route::get('/', [ComponenController::class, 'index'])->middleware('auth');
    Route::get('/profile', [UserController::class, 'index'])->middleware('auth');
    Route::get('/edit-password/{id}', [UserController::class, 'edit'])->middleware('auth');
    Route::get('/add-kegiatan', [KegiatanController::class, 'index'])->middleware('auth');
    Route::get('/detail/{id}', [MaintenanceController::class, 'index'])->middleware('auth');
    Route::get('/export-pdf/{id}', [MaintenanceController::class, 'exportPDF'])->middleware('auth');
    Route::get('/komputer/update/{id}/edit', [KomputerController::class, 'edit'])->name('komputer_edit')->middleware('auth');
});




