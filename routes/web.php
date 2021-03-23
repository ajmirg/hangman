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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Homepage
Route::get('/admin', function () {
    return view('admin.admin');
});

Route::resource('/admin/challenges', 'App\Http\Controllers\ChallengeController'/*, ['except' => ['create', 'edit']]*/);

Route::get('play/{level}','App\Http\Controllers\ChallengeController@play');

Route::post('/update_scoreboard','App\Http\Controllers\ScoreController@updateScoreboard');

Route::get('/scoreboard','App\Http\Controllers\ScoreController@index');

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

    Route::get('/', function ()    {
        // Uses Auth Middleware
        return view('admin.admin');

    });
});
