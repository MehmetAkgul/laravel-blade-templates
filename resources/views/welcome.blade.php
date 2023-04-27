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
<body>
@php
    $variable1= ' @_php ve @_endphp directive arasinda tanimlanan bir degiskendir ';
@endphp

@php($counter = 1)
bu derste blade templates isliyoruz
<br>
{{ $variable1 }}
<br>
{{ $counter }}

{{--burasi commment alani--}}
<ul>
    <li><a href="{{route("ifendif")}}">if endif statement </a></li>
    <li><a href="{{route("unlessendunless")}}"> unless directive </a></li>
    <li><a href="{{route("isset")}}"> isset directive </a></li>
    <li><a href="{{route("empty")}}"> empty directive </a></li>
    <li><a href="{{route("production")}}"> production directive </a></li>
    <li><a href="{{route("switch")}}"> switch statement directive </a></li>
    <li><a href="{{route("loops")}}"> loops directives </a></li>
    <li><a href="{{route("style")}}"> style directives </a></li>
    <li><a href="{{route("attribute")}}"> attribute directives </a></li>
    <li><a href="{{route("include")}}"> include directives </a></li>
    <li><a href="{{route("each")}}"> each directives </a></li>
    <li><a href="{{route("once")}}"> once directives </a></li>
    <li><a href="{{route("components")}}"> components  </a></li>
    <li><a href="{{route("components-alert")}}"> components-alert  </a></li>
    <li><a href="{{route("components-button")}}"> components-button  </a></li>
</ul>
</body>
</html>
