<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackerController;
use App\Http\Controllers\TrackerDetailController;

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

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('trackers', TrackerController::class);
 
//Route::get('/trackerdetails/{id}', 'TrackerDetailController@index')->name('trackerdetails.index');
Route::get('/trackerdetails/{id}', [TrackerDetailController::class, 'index'])->name('trackerdetails.index');
//Route::resource('trackerdetails', TrackerDetailController::class);