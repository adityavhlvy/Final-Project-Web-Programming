<?php

use App\Http\Controllers\SessionController;
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
    return view('homepage', ["title" => "Home"]);
});
Route::get('/session', [SessionController::class, 'index']);
Route::get('/form-pengaduan', function(){
    return view('formngadu',["title" => "Ngadu"]);
});
Route::post('/session/login', [SessionController::class, 'login']);