<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Rohit Sharma Website')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1; /* This will make the main content take up the available space */
        }
    </style>
</head>

<body>
    @include('layout.header')
    <main>
        @yield('appContents')
    </main>
    @include('layout.footer')
    <footer>
        <p>&copy; {{ date('Y') }} Rohit Sharma. All rights reserved.</p>
    </footer>
</body>
</html>

