<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LayananController;

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

Route::get('/', [PageController::class, 'home'])->name('home.page');
Route::get('/layanan', [PageController::class, 'services'])->name('layanan.page');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about.page');
Route::get('/testimoni', [PageController::class, 'testimoni'])->name('testimoni.page');
Route::get('/faq', [PageController::class, 'faq'])->name('faq.page');

Route::get('/layanan/pendirian-usaha', [PageController::class, 'pendirianusaha'])->name('layanan.pendirian');
Route::get('/layanan/legalitas-perizinan', [PageController::class, 'legalitas'])->name('layanan.legalitas');
Route::get('/layanan/paket-gabungan', [PageController::class, 'paketgabungan'])->name('layanan.paket');
Route::get('/layanan/perpajakan', [PageController::class, 'perpajakan'])->name('layanan.perpajakan');