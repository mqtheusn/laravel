<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);
Route::get('/contato',[\App\Http\Controllers\PrincipalController::class,'contato']);
Route::get('/sobre-nos',[\App\Http\Controllers\PrincipalController::class,'sobreNos']);

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/clientes', function () {
    return view('welcome');
});

Route::get('/fornecedores', function () {
    return view('welcome');
});