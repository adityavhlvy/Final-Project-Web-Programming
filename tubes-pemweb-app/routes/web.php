<?php

use App\Models\Complaint;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComplaintController;

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

// Route::get('/', function () {
//     $complaints = Complaint::all();
//     return view('home', ['complaints' => $complaints]);
// });

Route::get('/', [ComplaintController::class, 'indexHome']);
// Route::get('/laporan', [ComplaintController::class, 'index']);

Route::get('/document', function () {
    return view('dashboard.document', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/laporan', [ComplaintController::class, 'index']);
Route::get('/jumlahLaporan', [ComplaintController::class, 'chart']);
Route::post('/laporan', [ComplaintController::class, 'store']);
Route::get('/dashboard', [ComplaintController::class, 'adminIndex']);
Route::post('/updateComplaint', [ComplaintController::class, 'updateStatus']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [ComplaintController::class, 'profileIndex']);
Route::post('/update', [RegisterController::class, 'updateUser']);
Route::get('/allProfile', [RegisterController::class, 'allProfile']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/surat', [SuratController::class, 'index'])->name('form-surat');
Route::post('/surat/generate', [SuratController::class, 'generateSurat'])->name('generate-surat');

