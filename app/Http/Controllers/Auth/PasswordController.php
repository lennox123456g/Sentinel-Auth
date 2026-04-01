<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    use CanResetPassword
}
