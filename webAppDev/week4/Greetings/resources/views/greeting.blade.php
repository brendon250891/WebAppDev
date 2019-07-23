<!DOCTYPE html>
<html>
    <head>
        <title>Greetings</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/wp.css') }}">
    </head>
    <body>
        <p>Hello {{ $name }}.
        Next year, you will be {{ $age }} years old.
    </body>
</html>