@extends('layout')

@section('mainbody')

    <section class = ''>
        <main class=' max-w-lg bg-gray-100 border-gray-500 border-6 p-5 px-2 mt-20 mx-auto rounded-xl'>
            <h1 class=' w-90 text-center m-auto p-5 font-sans text-2xl border-8 px-4 block'>Sign Up</h1>
        

            <div class = 'text-center block m-5'>
                <form method = 'POST' action ='/register'>
                    @csrf
                    <label for='username' class = 'text-gray-700 mb-5'> Username: </label><br>
                    <input type = 'text' value = "{{old('username')}}" name = 'username' id = 'username' placeholder = 'XX_Sexhaver69420_XX' required class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('username')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>

                    <label for='name' class = 'text-gray-700'> Name: </label><br>
                    <input type = 'text' value = "{{old('name')}}" name = 'name' id = 'name' placeholder = 'Albert Sexhaver' required class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('name')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>

                    <label for='email' class = 'text-gray-700'> Email: </label><br>
                    <input type = 'text' value = "{{old('email')}}" name = 'email' id = 'email' placeholder = 'Sexhaver69@gmail.com' required class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('email')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>

                    <label for='password' class = 'text-gray-700'> Password: </label><br>
                    <input type = 'password' name = 'password' id = 'password' placeholder = '' required class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('password')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>


                    <label for='Organisation' class = 'text-gray-700'> Organisation Name: </label><br>
                    <input type = 'text' name = 'organisation' id = 'organisation' placeholder = 'Amongus Incorporated' required class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('organisation')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>

                    <label for='orgrype' class = 'text-gray-700'> Organisation Type: </label><br>
                    <input type = 'radio' name = 'orgtype' id = 'orgtype' value = 'Garage' required class = 'p-2 px-6 border-2 border-gray-500'>   Garage<br>
                    <input type = 'radio' name = 'orgtype' id = 'orgtype' value = 'Rental' required class = 'p-2 px-6 border-2 border-gray-500'>   Rental<br>
                    <input type = 'radio' name = 'orgtype' id = 'orgtype' value = 'Other' required class = 'p-2 px-6 border-2 border-gray-500'>   Other<br>
                    @error('orgtype')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br>


                    <!-- Set up this input to validate organisations? -->

                    <!-- <label for='code' class = 'text-gray-700'> Organisation Code: </label><br>
                    <input type = 'password' name = 'code' id = 'code' placeholder = ''  class = 'p-2 px-6 border-2 border-gray-500'><br>
                    @error('code')
                        <p class = 'text-red-500 text-xs mt-1'>{{$message}}</p>
                    @enderror
                    <br> -->


                    <input type = 'submit' name = 'submit' value = 'Submit' class = 'p-4 bg-blue-300 border-2 border-gray-500'>
                </form>
            </div>
        </main>
    </section>

@endsection