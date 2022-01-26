<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List...</title>
</head>

<body>
    <h1>...of all the records</h1>
    <p>
        <a href="{{ route('home') }}">Link back to the main page</a><br>
        <a href="{{ route('homework.create')}}">Create a new record</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>Diák neve</th>
                <th>Feladat</th>
                <th>URL</th>
                <th>Beadva</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hazik as $hazi)
            <tr>
                <td><a href="{{ route('homework.show', ['homework' => $hazi->id]) }}">{{ $hazi->diak_nev }}</a></td>
                <td>{{ $hazi->feladat }}</td>
                <td><a href="{{ $hazi->url }}" target="_blank">{{ $hazi->url }}</a></td>
                <td>{{ $hazi->updated_at }}</td>
                <td>
                    <a href="{{ route('homework.edit', $hazi) }}">Edit</a>
                    <form method="POST" action="{{ route('homework.destroy', $hazi) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Törlés</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
