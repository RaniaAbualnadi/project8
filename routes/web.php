<?php

use App\Http\Controllers\Showmovie;
use App\Http\Controllers\showsinglemovie;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserContoller;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/movies', function () {
//     return view('moviegrid');
// });
Route::resource('movies',TicketController::class);
Route::get('moviegrid',[Showmovie::class,'showmovie']);
Route::get('moviesingle',[showsinglemovie::class,'showsinglemovie']);

Route::resource('admin/tickets', TicketController::class);
Route::resource('admin/users', UserContoller::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
