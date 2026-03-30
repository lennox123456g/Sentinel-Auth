<?php


use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
# Static Pages. Redirecting admin so admin cannot access these pages.
Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'getHome');
    Route::get('/about', 'getAbout');
    Route::get('/contact', 'getContact');
});


#Registration
Route::controller(RegistrationController::class)->group(function(){
    Route::get('register', 'index');
    Route::post('register', 'store')->name('registration.store');
});
