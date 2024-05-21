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
    return view('welcome');
});

use App\Http\Controllers\PublicController;
Route::get('/', [PublicController::class, 'toppage'])->name('toppage');
Route::get('/games', [PublicController::class, 'gamesView'])->name('games.gamesView');
Route::get('/posts', [PublicController::class, 'gameposts'])->name('gameposts.');

use App\Http\Controllers\Admin\GamesController;
Route::controller(GamesController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('gamingposts/create', 'add')->name('gamingposts.add');
    Route::post('gamingposts/create', 'create')->name('gamingposts.create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
