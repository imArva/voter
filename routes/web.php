<?php

use App\Events\ResultEvent;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Response;
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

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    // Route::get('/register', [AuthController::class, 'register']);

    // Route::post('/register', [AuthController::class, 'registerAction']);
    Route::post('/login', [AuthController::class, 'loginAction']);

});

Route::middleware('auth')->group(function () {

    Route::get('/listvote', [PageController::class, 'listvote']);
    Route::post('/vote', [PageController::class, 'voteAction']);

    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/dashboard', [PageController::class, 'dashboard']);
    
    Route::get('/new', [PageController::class, 'newlink']);
    Route::post('/newlink', [PageController::class, 'newlinkAction']);
    
    Route::get('/mylinks', [PageController::class, 'mylinks']);

    Route::get('/result', [PageController::class, 'resultlist']);

    Route::get('/edit/{voting:slug}', [PageController::class, 'editLink']);
    
    Route::get('/voting/{voting:slug}', [PageController::class, 'vote']);

    Route::get('/result/{voting:slug}', [PageController::class, 'result']);

    Route::get('/delete/{voting:slug}', [PageController::class, 'delete']);

});




