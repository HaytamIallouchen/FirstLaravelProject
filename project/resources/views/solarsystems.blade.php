<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <a href="/planets">All planets</a>
        <h1>All solarsystems</h1>
        <table>
            <tr>
                <th>Name</th> <th>ID</th> <th>Age-in-years</th> <th>Count-planets<th>
            </tr>
        @foreach ($solarsystems as $solarsystem)
            <tr>
                <td>
                    <a href='/solarsystems/{{$solarsystem->id}}'>{{$solarsystem->name}}</a>
                </td>
                <td>{{$solarsystem->id}}</td><td>{{$solarsystem->age_in_years}}</td><td>{{$solarsystem->planets_count}}</td>
            </tr> 
        @endforeach
        </table>
        <p>Click on the solarsystem-name to view <br>all planets in the selected solarsystem</p>
    </body>
</html>