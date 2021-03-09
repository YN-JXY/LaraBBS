<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{csrf_token() }}">
    <title>@yield('title','LarBBS')- Laravel 进阶教程</title>

    {{-- Style --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div id="app" class="{{route_class()}}-page">
        @include('layouts._header')
        <div class="container">
            @include('shared._messages')

            @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
