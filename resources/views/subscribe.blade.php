@extends('layout')

@section('mainbody')


<div class = 'text-center pb-5 font-semibold'>
    <h1>Time to Pay a Subscription</h1>
</div>


<div class = 'text-center'>
    
    <div class = 'pb-5'>
        <h3>Subscription One</h3>
        <p>Lorem Ipsum Dolor sit amet</p>

        @auth
            <form method = 'get' action = '/subscriptionone'>
                <input type = 'submit' value = 'start today'>
            </form>
        @endauth

        @guest
            <form method = 'get' action = '/login'>
                <input type = 'submit' value = 'Log In to continue'>
            </form>
        @endguest

    </div>
</div>


@endsection