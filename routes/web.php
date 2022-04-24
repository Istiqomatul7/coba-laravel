<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\HTTP\Controllers\EmailController;
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

Route::get('/email', [EmailController::class,'kirimemail']);
Route::get('/attach',[EmailController::class,'attach']);
Route::get('/pesan', [EmailController::class,'notif']);

Auth::routes(['verify' => true]) ;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
