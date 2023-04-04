<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Templates.Felax.index.demo');
});
Route::get('/asha', function () {
    return view('Templates.Asha.demo');
});
