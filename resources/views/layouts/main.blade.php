<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
{{--@include('layouts.nav')--}}
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mt-5">
            @yield('content')
        </div>

    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
