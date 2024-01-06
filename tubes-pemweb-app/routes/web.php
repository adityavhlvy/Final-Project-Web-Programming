<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepageview', ["title" => "Home"]);
});
Route::get('/session', [SessionController::class, 'index']);
Route::get('/form-pengaduan', function(){
    return view('formngaduview',["title" => "Ngadu"]);
});
Route::get('/blog', [BlogController::class, 'index']);
