<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" />
    <title>Document</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        @include('includes.header')
    </header>
    <!-- MAIN -->
    <main class="py-5">
        @include('alert.alert')
    @yield('content')
    </main>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    @yield('scripts')
</body>
</html>