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
});