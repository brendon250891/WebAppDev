<!DOCTYPE html>
<html>
    <head>
        <title>Foreach</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/wp.css') }}">
    </head>
    <body>
        <table class="bordered">
            <tr><th>Name</th><th>Value</th></tr>
            @forelse($get as $name => $value)
                @if($loop->index % 2 == 0)
                    <tr class="alternate"><td>{{ $name }}:</td><td>{{ $value }}</td></tr>
                @else
                    <tr><td>{{ $name }}:</td><td>{{ $value }}</td></tr>
                @endif
            @empty
                <tr><td colspan=2>No URL Variables</td></tr>
            @endforelse
        </table>
    </body>
</html>