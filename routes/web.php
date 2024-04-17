<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('index');
})->name("mainpage");

Route::get('/contact',static function(){
    return view('contact');
})->name('contact');

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::post('/contact/submit', [ContactController::class,'submit'])->name('contact-form');
Route::get('/contact/all', [ContactController::class,'allData'])->name('contact-data');
Route::get('/contact/{id}', [ContactController::class,'oneMessage'])->name('contact-data-one');
Route::get('/contact/{id}/update', [ContactController::class,'updateMessage'])->name('contact-update');
Route::post('/contact/{id}/update', [ContactController::class,'updateMessageSubmit'])->name('contact-update-submit');
Route::get('/contact/{id}/delete', [ContactController::class,'deleteMessage'])->name('contact-delete');

Route::get('/conference-create',static function(){return view('conference');})->name('conference-form');
Route::post('/conference-create/submit', [ConferenceController::class,'submit'])->name('conference-form');
Route::get('/conference/list', [ConferenceController::class,'allData'])->name('conference-data');
Route::get('/conference/list/{id}', [ConferenceController::class,'oneConference'])->name('conference-data-one');
Route::get('/conference/list/{id}/update', [ConferenceController::class,'updateConference'])->name('conference-update');
Route::post('/conference/list/{id}/update', [ConferenceController::class,'updateConferenceSubmit'])->name('conference-update-submit');
Route::get('/conference/list/{id}/delete', [ConferenceController::class,'deleteConference'])->name('conference-delete');


Route::get('/login',[LoginController::class,'showLoginForm'])->name('login-form');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/logout', [LoginController::class,'logout'])->name('logoutas');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
