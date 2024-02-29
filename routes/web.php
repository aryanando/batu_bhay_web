<?php

use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[LandingPageController::class, 'index']);

Route::get('/post', function () {
    return view('post');
});

Route::get('/blog', function () {
    return view('blog');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kuesioner/kepuasan-pasien-gizi/{no_rawat}', [KuesionerController::class, 'gizi'])->middleware('auth:web');
Route::post('/kuesioner/kepuasan-pasien-gizi/', [KuesionerController::class, 'simpanGizi']);
