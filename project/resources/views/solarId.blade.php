<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <a href="/planets">All planets</a> or go <a href="/solarsystems">back</a>
        <h1>Planets in solarsystem ID: {{$solarsystem->id}}</h1>
        <table>
            <tr>
                <th>ID - Solarsystem</th><th>Description</th>
            </tr>
        @foreach ($solarsystem->planets as $solarsystem)
            <tr>
                <td>{{$solarsystem->id}} - {{$solarsystem->name}}</td>
                <td>{{$solarsystem->description}}</td>
            </tr> 
        @endforeach
        </table>
    </body>
</html>