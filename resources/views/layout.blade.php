<!doctype html>

<head>
    <title>Captis</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        @include('_header')

        @yield('mainbody')

        @include('_footer')
    </section>

    @if (session()->has('passed'))
        <div class = 'bg-blue-500 fixed text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm'>
            <p> {{session()->get('passed')}} </p>
        </div>
    @endif

</body>
