@extends('layout')

@section('mainbody')


<div class = 'text-center pb-5 font-semibold'>
    <h1>Time to Pay a Subscription</h1>
</div>


<div class = 'text-center'>
    
    <div class = 'pb-5'>
        <h3>Subscription One</h3>
        <p>Lorem Ipsum Dolor sit amet</p>
        <form method = 'get' action = '/billing-portal'>
            <input type = 'submit' value = 'start today'>
        </form>
    </div>

    <div class = 'pb-5'>
        <h3>Subscription Two</h3>
        <p>Lorem Ipsum Dolor sit amet</p>

    </div>

    <div class = 'pb-5'>
        <h3>Subscription Three</h3>
        <p>Lorem Ipsum Dolor sit amet</p>
    </div>

</div>


@endsection