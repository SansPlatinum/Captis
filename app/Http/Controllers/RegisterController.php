<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Organisation;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

 
    public function create(){

        return view('registeruser');

    }

    public function store(){

        $attributes1 = request()->validate([
            'name' => ['required', 'max:30', 'min:3'],
            'username' => ['required', 'max:20', 'min:3', 'unique:users,username'],
            'email' => ['required', 'max:255','email', 'unique:users,email'],
            'password' => ['required', 'max:255', 'min:7'],
        ]);
        
        $attributes2 = request()->validate([           
        'organisation_name' => ['required', 'max:255', 'unique:organisations,organisation_name'],
        'organisation_type_id' => [''],
        'address' => ['required'],
        'postcode' => ['required'],
        ]);

    

        $user = User::create($attributes1);
        $org = Organisation::create($attributes2);

        auth()->login($user);

        //auth()->user()->createAsStripeCustomer();

        return redirect('/')->with('passed', 'Account Created Successfully, and Logged In');

    }

}
