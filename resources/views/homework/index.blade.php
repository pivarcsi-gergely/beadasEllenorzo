<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List...</title>
</head>

<body>
    <h1>...of all records</h1>
    <p>
        <a href="{{ route('home') }}">Link back to the main page</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>Diák neve</th>
                <th>Feladat</th>
                <th>URL</th>
                <th>Beadva</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hazik as $hazi)
            <tr>
                <td>{{ $hazi->diak_nev }}</td>
                <td>{{ $hazi->feladat }}</td>
                <td>{{ $hazi->url }}</td>
                <td>{{ $hazi->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>