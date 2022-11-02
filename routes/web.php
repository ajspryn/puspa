<?php

use App\Http\Controllers\Admin\AnggotaForumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumKegiatanController;

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

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/anggotadetail', function () {
    return view('super-admin.anggota.lihat');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->resource('/kegiatan', ForumKegiatanController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('/profile', UserController::class);


// route super admin
Route::prefix('admin')->middleware(['auth:sanctum', 'verified', 'role:0'])->group(function () {
    Route::resource('/anggota', AnggotaForumController::class);
});
