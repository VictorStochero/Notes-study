<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/main/{id?}', [MainController::class, 'index'])->name('home');

Route::get(
    '/echo',
    function () {
        return "echo";
    }
);
