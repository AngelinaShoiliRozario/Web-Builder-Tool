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

Route::get('/', function () {
    return view('Templates.Felax.demo');
});
Route::get('/Felax', function () {
    return view('Templates.Felax.index');
});
Route::get('/editor', function () {
    return view('layouts.EditorMode.webpage_editor');
});
