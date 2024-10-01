<?php

use App\Http\Controllers\ArticleController;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Database\Factories\ArticleFactory;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    $address = User::with('address')->find($id);
    dd($address['address']['country']);
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', function () {
        $userList = User::get();
        return view('dashboard', compact('userList'));
    })->name('dashboard');
    // Route::get('/dashboard',UserController::class,'userList')->name('user#List');
    Route::get('articles/add', [ArticleController::class, 'add'])->name('article.addPage');
    Route::post('article/add', [ArticleController::class, 'create'])->name('article.create');
    Route::get('articles', [ArticleController::class, 'index'])->name('article.list');
    Route::get('detail/{id}', [ArticleController::class, 'detail'])->name('article.detail');
});
