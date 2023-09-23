<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadDokumenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KodebaController;
use App\Http\Controllers\KlController;
use App\Http\Controllers\PaguController;
use App\Http\Controllers\KodekabController;
use App\Http\Controllers\KodeakunController;
use App\Http\Controllers\FrontendController;
// use App\Models\Kodeakun;
use App\Models\Pagu;

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
//     return view('welcome');
// });

// Route::get('/depan', function () {
//     return view('frontend.depan');
// });
Route::get('depan', [FrontendController::class, 'showdepan'])->name('frontend.depan');
// Route::post('depan', [FrontendController::class, 'showdepan'])->name('frontend.depan');
Route::post('depan', [FrontendController::class, 'showdepan'])->name('frontend.depan');


// Route::get('/depan', [FrontendController::class, 'depan']);

Route::get('/profile', [HomeController::class, 'showprofile']);

// Route::get('depan', [FrontendController::class, 'showdepan']);

//route admin//
Route::get('beranda', [HomeController::class, 'showberanda']);
// Route::get('kl', [HomeController::class, 'showkl']);

Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('user', 'HomeController@index')->name('user');

//
Route::resource('user', UserController::class);
Route::resource('kodeba', KodebaController::class);
Route::resource('pagu', PaguController::class);
// Route::resource('kode', KodebaController::class);

// routes/web.php


Route::get('/kl/create', [KlController::class, 'create'])->name('import.create');
Route::post('/kl/store', [KlController::class, 'store'])->name('import.store');
Route::get('kl/export/', [KlController::class, 'export']);

Route::resource('kl', KlController::class);
// Route::post('/kppn/file/import_excel', 'KlController@Import_excel');
// Route::get('import-kl', [KlController::class, 'importkl']->name);
Route::resource('kodekab', KodekabController::class);
Route::resource('kodeakun', KodeakunController::class);



Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
