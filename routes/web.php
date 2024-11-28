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
Route::get('/posts', [PublicController::class, 'gamePosts'])->name('gamePosts');

use App\Http\Controllers\Admin\GamesController;
Route::controller(GamesController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    //Route::get('gamingposts/settings', 'settingAdd')->name('settings.add');
    Route::get('gamingposts/create/{gamename}', 'add')->name('gamingposts.add');
    Route::get('gamingposts/create', '_404');
    Route::post('gamingposts/create', 'create')->name('gamingposts.create');
    Route::get('gamingposts', 'index')->name('gamingposts.index');
    Route::get('gamingposts/edit', 'edit')->name('gamingposts.edit');
    Route::post('gamingposts/edit', 'update')->name('gamingposts.update');
    Route::get('gamingposts/delete', 'delete')->name('gamingposts.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
