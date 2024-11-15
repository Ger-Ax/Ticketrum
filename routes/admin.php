<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

route::prefix('admin')->name('admin.')->group(function(){

    route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','back.pages.admin.auth.login')->name('login');
        Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');

    });

    route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        route::view('/home','back.pages.admin.home')->name('home');
        route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name
        ('logout_handler');
        route::get('/profile',[AdminController::class,'profileView'])->name('profile');
    });
});