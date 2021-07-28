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
            return redirect('/')->with('passed', 'hey broski, welcome back to teh site, XD');
        }

        return back()
        ->withInput()
        ->withErrors(['username' => 'Hey pardner, Looks like that\'s not a set of good old valid credentials']);

    }
}
