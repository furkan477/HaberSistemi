<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsController;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/contact-see',[HomeController::class,'contactSeeMessage'])->name('contact.message.see');
Route::post('/contact',[HomeController::class,'ContactMessage'])->name('contact.message');


Route::get('/login',[AuthController::class,'loginindex'])->name('login.index');
Route::get('/register',[AuthController::class,'registerindex'])->name('register.index');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/register',[AuthController::class,'register'])->name('register');


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');


Route::get('/user-profil/{id}',[HomeController::class,'usersProfil'])->name('users.profil');
Route::get('/user-profil',[HomeController::class,'userProfil'])->name('user.profil');
Route::get('/user-profil-settings',[HomeController::class,'userProfilSettings'])->name('user.profil.settings');
Route::post('/user-profil-settings',[HomeController::class,'userProfilSettingsUpdate'])->name('user.profil.update');


Route::get('/news',[NewsController::class,'newsindex'])->name('news.index');
Route::post('/news/filter',[NewsController::class,'filternews'])->name('filter.news');

Route::get('/user/news',[NewsController::class,'usernews'])->name('user.news');
Route::get('/add/news',[NewsController::class , 'addnews'])->name('add.news');
Route::get('/news/edit/{id}',[NewsController::class,'newsedit'])->name('news.edit');
Route::get('/news/delete/{id}',[NewsController::class,'newsdelete'])->name('news.delete');

Route::post('/add/news',[NewsController::class,'newscreate'])->name('news.create');
Route::post('/news/edit/{id}',[NewsController::class,'newsupdate'])->name('news.update');
