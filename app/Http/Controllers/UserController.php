<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Function that returns register form if user is not logged in
    // If user is logged in redirects him to homepage
    public function registrationForm()
    {
        if (Auth::check()) {
            return view('homepage');
        }
        return view('register');
    }

    // Function that adds user to database and register him
    public function registerUser(Request $request)
    {

        // Checking if data in request is valid
        $request->validate([
            'username' => 'string|max:255|required',
            'email' => 'email|required|string|unique:users|max:255',
            'password' => 'required|string|min:5|confirmed',
        ]);
        // Creating new user and adding him to db 
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // Logging user in after successful registration and starting a session
        Auth::login($user);

        // Redirecting user to homepage
        return redirect()->route('homepage')->with('success', 'You registrated successfully!');
    }


    // Function that returns register form if user is not logged in
    // If user is logged in redirects him to homepage
    public function loginForm()
    {
        if (Auth::check()) {
            return view('homepage');
        }
        return view('login');
    }


    public function loginUser(Request $request)
    {
        // Validating data from request
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // only gets array of keys and makes assoc array for Auth::attempt
        $credentials = $request->only(['email', 'password']);

        // Checking if there is a row in DB with these values
        if (Auth::attempt($credentials)) {
            return redirect()->route('homepage');
        }
        // If user credentials are not valid we return the error message
        return redirect()->back()->withErrors([
            'email' => "Invalid credentials"
        ]);
    }

    // Function for logging out user
    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage')->with('success', 'You logged out!');
    }

    // Function returns userDetails view with users data 
    public function userDetails($id)
    {
        $user = User::find($id);
        return view('userDetails', ['user' => $user]);
    }
}
