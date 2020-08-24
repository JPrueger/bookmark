<!doctype html>
<html lang="en">
<head>

    <title>@yield('title')bookmark</title>

    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}"/>

    {{-- <link rel="stylesheet" href="../../css/css/style.css"/> --}}
    <link rel="stylesheet" href="https://use.typekit.net/xoz5eej.css">

    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <header>
        @include('partials.navbar')
    </header>

    <main>
        @yield('container')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
 
</body>

    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

</html>
