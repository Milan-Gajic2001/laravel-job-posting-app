<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function registrationForm()
    {
        if (Auth::check()) {
            return view('homepage');
        }
        return view('register');
    }


    public function registerUser(Request $request)
    {
        echo $request;
        $request->validate([
            'username' => 'string|max:255|required',
            'email' => 'email|required|string|unique:users|max:255',
            'password' => 'required|string|min:5|confirmed',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('homepage')->with('success', 'You registrated successfully!');
    }


    public function loginForm()
    {
        if (Auth::check()) {
            return view('homepage');
        }
        return view('login');
    }


    public function loginUser(Request $request)
    {

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

        return redirect()->back()->withErrors([
            'email' => "Invalid credentials"
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage')->with('success', 'You logged out!');
    }


    public function userDetails($id)
    {
        $user = User::find($id);
        return view('userDetails', ['user' => $user]);
    }
}
