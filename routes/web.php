<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
 
Route::get('/', function () {
    return view('loginess/loginask');
});
 
Route::get('/loginalumnos', function () {
    return view('loginess/loginalumnos');
})->name('loginalumnos');

Route::get('/loginadmin', function () {
    return view('loginess/loginadmin');
})->name('loginadmin');

Route::get('/navegacion', function () {
    return view('menu/navigate');
})->name('navegation');