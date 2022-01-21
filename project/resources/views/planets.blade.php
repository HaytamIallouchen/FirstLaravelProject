<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>All planets</h1>
        <table> 
            <th>Planets</th> <th>Description</th> <th>Size km</th> <th><a href="/solarsystems">Solarsystems name-id</a></th>
        @foreach ($planets as $planet)
        <tr>
            <td>{{$planet->name}}</td><td>{{$planet->description}}</td><td>{{$planet->size_in_km}}</td>
            <td>{{$planet->solarsystem->name}}-<a href="/solarsystems/{{$planet->solarsystem->id}}">{{$planet->solarsystem->id}}</a></td>
        </tr> 
        @endforeach
        </table>
        <p>Click on the solarsystem-id to view <br>all planets in the selected solarsystem</p>
    </body>
</html>