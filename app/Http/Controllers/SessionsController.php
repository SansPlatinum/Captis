<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('passed', 'You have logged out');
    }

    public function create(){
        return view('login');
    }

    public function store(){

        $attributes = request()->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        
        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('passed', 'Welcome Back');
        }

        return back()
        ->withInput()
        ->withErrors(['username' => 'Invalid Credentials, Please Try Again']);

    }
}
