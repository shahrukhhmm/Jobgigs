<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    //show register form
    public function create(){
        return view('users.register');
    }

//   new user
    public function store(Request $request){
        $formfield = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:3'
        ]);
        // Hash Password
        $formfield['password'] = bcrypt($formfield['password']);

        // Create User
        $user = User::create($formfield);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }


    // logout user
    public function logout(Request $req){
        auth()->logout();

        $req->session()->invalidate();
        $req->session()->regenerate();

        return redirect('/')->with('message','You have been logout');
    }

    // show login form
    public function login(){
        return view('users.login');
    }

    // login user
    public function authenticate(Request $request){
        $formfield = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formfield)){
            $request->session()->regenerate();
        return redirect('/')->with('message','You are now login');
        }
        return back()->withErrors(['email'=>'Invalid credentiials'])->onlyInput('email');
    }
}
