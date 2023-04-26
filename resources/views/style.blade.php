<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

</head>
<body style="text-align: center">


burasi style directive icin bir kullanim ornegi <br>

@php
    $isActive = false;
@endphp

<span @style(['background-color: red'=> $isActive, 'font-weight: bold' => $isActive, ])>birinci satir</span>
<br>
<span style="background-color: red; font-weight: bold;">ikici satir</span>
<br>
<a href="{{url("/")}}">Geri Don</a>
</body>
</html>
