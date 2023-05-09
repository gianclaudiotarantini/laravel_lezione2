<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Homepage', function () {
    return view('Homepage');
});

Route::get('/Azienda', function () {
    return view('Azienda');
});

Route::get('/Lista_destinazioni', function () {

    $destinazioni = ['Roma', 'Milano', 'Bari', 'Amsterdam', 'Napoli', 'Praga'];

    return view('destinazioni', ['destinazioni' => $destinazioni]);
});

Route::get('/Form', function () {
    return view('form');
});

Route::get('/destinazioni/{meta}', function ($city) {

    return $city;
});

