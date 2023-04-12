<?php

use App\Http\Controllers\PlayController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


route::get('/', [UserController::class, 'index'])->name('user.index');

Route::controller(UserController::class)->prefix('user')->group(function () {
    route::any('/register', 'register')->name('user.register');
    route::post('/store', 'store')->name('user.store');
});
Route::controller(PlayController::class)->group(function () {
    route::get('/play', 'index')->name('play.index');
});
