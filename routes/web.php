<?php


use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
# Static Pages. Redirecting admin so admin cannot access these pages.
Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'getHome');
    Route::get('/about', 'getAbout');
    Route::get('/contact', 'getContact');
});

