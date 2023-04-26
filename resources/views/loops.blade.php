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

burasi Loops icin bir kullanim ornegi <br>

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}<br>

@endfor


@foreach (\App\Models\User::all() as $user)
    @if ($loop->first)
        This is the first iteration.
    @endif

    @if ($loop->last)
        This is the last iteration.
    @endif

    <p>This is user {{ $user->name }}</p>
@endforeach


@while (true)
    <p>I'm looping forever.</p>

    @break(true)
@endwhile


<br>
<a href="{{url("/")}}">Geri Don</a>
</body>
</html>
