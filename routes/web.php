<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get('/', [SeriesController::class, 'index'])->name('home'); // For displaying the list of series
Route::get('/series/create', [SeriesController::class, 'create'])->name('series.create'); // For showing the create form
Route::post('/series', [SeriesController::class, 'store'])->name('series.store'); // For storing the new series
Route::get('/series/{id}/edit', [SeriesController::class, 'edit'])->name('series.edit'); // For showing the edit form
Route::put('/series/{id}', [SeriesController::class, 'update'])->name('series.update'); // For updating the series
Route::delete('/series/{id}', [SeriesController::class, 'destroy'])->name('series.destroy'); // For deleting the series
