<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>{{config('app_name', 'LaraProxy')}}</title>

</head>

@include('inc.navbar')

<div class="container pt-1">

    @include('inc.messages')
    @yield('content')
</div>
</body>
</html>
