<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

    /*Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('admin.register');
    Route::post('/register', [AuthController::class, 'register'])->name('admin.register.post');*/

Route::group(['middleware'=>'adminauth'], function() {

    Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::get('/user/list', [HomeController::class, 'userList'])->name('admin.user.list');

    Route::get('user/info/{id}',[HomeController::class, 'userİnfo'])->name('admin.user.info');

    Route::get('user/delete/{id}',[HomeController::class, 'userDelete'])->name('admin.user.delete');


    Route::get('user/settings/{id}',[HomeController::class, 'userSettings'])->name('admin.user.settings');
    Route::post('user/profil/setting/{id}',[HomeController::class, 'userProfilUpdate'])->name('admin.user.profil.update');


    Route::get('user/news/delete/{id}',[HomeController::class, 'newsDelete'])->name('admin.news.delete');
    Route::get('user/news/info/{id}',[HomeController::class,'newsİnfo'])->name('admin.news.info');
    Route::post('user/news/info/{id}',[HomeController::class,'newsUpdate'])->name('admin.news.update');


    Route::get('user/contact/delete/{id}',[HomeController::class,'contactDelete'])->name('admin.contact.delete');
    Route::get('user/contact/update/{id}',[HomeController::class,'contactİnfo'])->name('admin.contact.info');
    Route::post('user/contact/update/{id}',[HomeController::class,'contactUpdate'])->name('admin.contact.update');



    Route::get('news/list',[HomeController::class,'newsList'])->name('admin.news.list');

    Route::get('contact/list',[HomeController::class,'contactList'])->name('admin.contact.list');


    Route::get('categories/list',[HomeController::class,'categoriesList'])->name('admin.categories.list');
    Route::get('categories/create',[HomeController::class,'categoriesShow'])->name('admin.categories.show');
    Route::get('categories/update/{id}',[HomeController::class,'categoriesİnfo'])->name('admin.categories.info');
    Route::post('categories/create',[HomeController::class,'categoriesCreate'])->name('admin.categories.create');
    Route::post('categories/update/{id}',[HomeController::class,'categoriesUpdate'])->name('admin.categories.update');
    Route::get('categories/delete/{id}',[HomeController::class,'categoriesDelete'])->name('admin.categories.delete');

});
