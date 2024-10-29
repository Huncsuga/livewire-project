<?php

use App\Http\Middleware\ProbaMiddleware;
use App\Livewire\PostComponent;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::middleware([ProbaMiddleware::class])->group(function () {
    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/', Home::class)->name('/');

    Route::get('/posts', PostComponent::class)->name('posts');
});