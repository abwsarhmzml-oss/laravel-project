<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\postcontroller;

Route::get('/', function () {

    return view('welcome');
});


Route::get('/data', function () {

    return view('dbcon');
});


Route::get('/login', [postcontroller::class ,'login'])->name('postes.login');
Route::post('/login',[postcontroller::class ,'login_Store'])->name('login.store');






Route::get('/postes', [postcontroller::class ,'index'])->name('postes.index');

Route::post('/postes',[postcontroller::class ,'store'])->name('postes.store');

Route::get('/postes/create',[postcontroller::class ,'create'])->name('postes.creat');

Route::get('/postes/{post}' , [postcontroller::class ,'show'])->name('postes.show');

Route::get('/postes/{post}/edit' , [postcontroller::class ,'edit'])->name('postes.Edit');

Route::put('/postes/{post}',[postcontroller::class ,'update'])->name('postes.update');

Route::DELETE('postes/{post}',[postcontroller::class ,'destroy'])->name('postes.destroy');
