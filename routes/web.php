<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\CardList;
use App\Http\Livewire\CreateCardForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('cards', CardList::class)->name('cards.index');
    Route::get('/cards/create', CreateCardForm::class)->name('cards.create');
});
