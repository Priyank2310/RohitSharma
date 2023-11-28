<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rohit Sharma Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="width-screen h-full">
    @include('layout.header')
    <main class="w-full h-screen">
    @yield('appContents')
    </main>
    @include('layout.footer')
    </div>
</body>

</html>
