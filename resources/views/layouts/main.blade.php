<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.navbar')
    <main>
        @include('sweetalert::alert')
        @yield('container')
    </main>
    @include('partials.footer')
</body>
</html>