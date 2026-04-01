<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class SessionController extends Controller
{
    /**
     * Show the login form.
     *
     * 
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Handle the login form submission.
     * Authenticates the user using Sentinel.
     * Handles wrong credentials, unactivated accounts and throttling.
     *
     * @param  LoginFormRequest  $request
     * 
     */
    public function store(LoginFormRequest $request)
    {
        // Get only the email and password from the request
        $input = $request->only('email', 'password');

        try {
            // Attempt to authenticate the user
            // Second parameter handles the "remember me" checkbox
            if (Sentinel::authenticate($input, $request->has('remember'))) {
                // Authentication successful - redirect to home
                return redirect('/')->with('flash_message', 'Welcome back!');
            }

            // Authentication failed - redirect back with error
            return redirect()->back()->withInput()->with('error_message', 'Invalid credentials provided');

        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            // User exists but has not activated their account
            return redirect()->back()->withInput()->with('error_message', 'User Not Activated.');

        } catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
            // Too many failed login attempts - Sentinel has blocked the user temporarily
            return redirect()->back()->withInput()->with('error_message', $e->getMessage());
        }
    }

    /**
     * Log the user out and redirect to login page.
     *
     * @param  int  $id
     * 
     */
    public function destroy($id = null)
    {
        // Log the user out using Sentinel
        Sentinel::logout();

        // Redirect to login page with a success message
        return redirect('/login')->with('flash_message', 'You have been logged out.');
    }
}