<?php

use App\Models\TvSeries;
use App\Livewire\TvSeriesFilter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;


// rotta public
Route::get('/', [PublicController::class, 'home'])->name('homepage');

Route::get('contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PublicController::class, 'contactSubmit'])->name('contact.submit');


// rotta card homepage
Route::get('/sections', [PublicController::class, 'sections'])->name('sections');


// rotta lista film
Route::get('/films', [MovieController::class, 'index'])->name('movies.index');

Route::get('/film/{id}', [MovieController::class, 'show'])->name('movies.show');


// rotta serie tv
Route::view('/tvseries', 'tvseries.index')->name('tvseries.index');
