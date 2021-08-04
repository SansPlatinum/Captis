<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function showoptions(){
        return view('subscribe');
    }

    public function create(){
        //when creating a subscription:
        //check if logged in and admin
        //check if payment method is available
        //begin subscription

            //set up payment method

            $intent = auth()->user()->createSetupIntent();


            return view('setPayment', [
                'intent' => $intent]);

            }
}
