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
@pushOnce('scripts')
        <script>
          document.title="bu bir once ornek calismasidir";
        </script>
@endPushOnce


<a href="{{url("/")}}">Geri Don</a>
</body>
</html>
