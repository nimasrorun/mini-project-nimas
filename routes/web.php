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

Route::get('/', function(){
    return view('index');
});

Route::get('/home', function(){
    return view('home-penulis');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/list-artikel', function(){
    return view('list-artikel');
});

Route::get('/detail-artikel', function(){
    return view('detail-artikel');
});

Route::get('/listartikeladmin', function(){
    return view('backend.layouts.listartikel-admin');
})->name('listartikeladmin');

Route::get('/listpenulisadmin', function(){
    return view('backend.layouts.listpenulis');
})->name('listpenulis');

Route::get('/loginadmin', function(){
    return view('loginadmin');
})->name('loginadmin');
