<?php


use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
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

# Authentication
Route::get('/login', [SessionController::class, 'create'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [SessionController::class, 'store'])
    ->name('sessions.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->name('logout');