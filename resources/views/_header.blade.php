<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/logo.jpg" alt="Webpage Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0">

        @guest
            <a href="/register" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Sign Up</a>
            <a href="/login" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Log In</a>
        @endguest

        @auth
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn h-50 rounded-xl">{{auth()->user()->username}}</button>
                <div id="myDropdown" class="dropdown-content overflow-y-scroll" style = 'display:hide;'>
                    <a href = '#'>Your Dashboard</a>
                    <a href = '#'>Notifications</a>
                    <a href = '#'>Your Company Information</a>
                    <a href = '#'>Bookings</a>
                </div>
            </div>
            <form method = 'POST' action='/logout' >
                @csrf
                <a><input type = 'submit' value = 'Log Out' class = 'relative rounded-xl float-right px-4 mt-1'></a>
            </form>
        @endauth
    </div>
</nav>

@include('ddownjs')