@extends('layout')

@section('mainbody')

    <section class = ''>
        <main class=' max-w-lg bg-gray-100 border-gray-500 border-6 p-5 px-2 mt-20 mx-auto rounded-xl'>
            <h1 class=' w-90 text-center m-auto p-5 font-sans text-2xl border-8 px-4 block'>Log In</h1>
            <div class = 'text-center block m-5'>
                <form method = 'POST' action ='/sessions'>
                    @csrf
                    <label for='username' class = 'text-gray-700 mb-5'> Username: </label><br>
                    <input type = 'text' value = "{{old('username')}}" name = 'username' id = 'username' required class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('username')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>
                    <label for='password' class = 'text-gray-700'> Password: </label><br>
                    <input type = 'password' name = 'password' id = 'password' placeholder = '' required class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('password')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>
                    <!-- <label for='code' class = 'text-gray-700'> Organisation Code: </label><br>
                    <input type = 'password' name = 'code' id = 'code' placeholder = '' class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('code')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br> -->

                    <input type = 'submit' name = 'submit' value = 'Log In' class = 'p-4 bg-blue-300 border-2 border-gray-500'>


                </form>
            </div>
        </main>


    </session>
@endsection