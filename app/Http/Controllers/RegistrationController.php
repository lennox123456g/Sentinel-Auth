<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationFormRequest;

class RegistrationController extends Controller
{
    // Shows the register form
    public function index()
    {
        return view('registration.create'); // points to resources/views/register.blade.php
    }

    public function store(RegistrationFormRequest $request)
    {
        $input = $request->only('email', 'password', 'first_name', 'last_name');

        $user = Sentinel::registerAndActivate($input);

        return redirect('/login')->with('flash_message', 'Account created!');
    }
}