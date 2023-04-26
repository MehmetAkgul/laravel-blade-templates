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
<?php $status = true ?>
@unless($status){{-- unless olmadikca demektir xaten ve burada false bekliyor false olmadikca calismaz--}}
    bu kisim false ise gozukuyor
@endunless

<a href="{{url("/")}}">Geri Don</a>
</body>
</html>
