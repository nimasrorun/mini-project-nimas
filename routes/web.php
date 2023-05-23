<?php

use App\Http\Controllers\admin\ArtikelController;
use App\Http\Controllers\admin\PenulisController as AdminPenulisController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomePenulisController;
use App\Http\Controllers\PenulisAuthController;
use App\Http\Controllers\PenulisController;
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



Route::get('/login', function(){
    return view('login');
});

Route::get('/list-artikel', function(){
    return view('list-artikel');
});


Route::prefix('admin')->group(function(){
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::get('list-artikel', [ArtikelController::class, 'index'])->name('admin.list-artikel.index')->middleware('admin.auth');
    Route::get('list-penulis', [AdminPenulisController::class, 'index'])->name('admin.list-penulis.index')->middleware('admin.auth');
});

Route::get('/', [DashboardController::class, 'index'])->name('homepage');

Route::get('/home', [HomePenulisController::class, 'index']);

Route::resource('/list-artikel', PenulisController::class)->middleware('penulis.auth');

Route::get('login', [PenulisAuthController::class, 'showLoginForm'])->name('penulis.login');
Route::post('login', [PenulisAuthController::class, 'login'])->name('penulis.login.submit');
Route::post('register', [PenulisAuthController::class, 'register'])->name('penulis.register');
Route::post('logout', [PenulisAuthController::class, 'logout'])->name('penulis.logout');

Route::get('detail_artikel/{artikel}', [DetailController::class, 'detail'])->name('detail-artikel.index');
Route::post('detail_artikel/{artikel}', [DetailController::class, 'comment'])->name('detail-artikel.post-comment');

