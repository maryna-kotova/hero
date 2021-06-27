<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SuperheroController;
use Illuminate\Support\Facades\Auth;
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

Route::get( '/', [MainController::class, 'index']);
Route::get('/delete/{superhero:id}', [MainController::class, 'deleteImage']);
Route::resource('/superheros', SuperheroController::class)->middleware('auth'); 

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
   \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes();
