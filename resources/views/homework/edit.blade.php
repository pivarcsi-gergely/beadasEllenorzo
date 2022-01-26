<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit this</title>
</head>
<body>
    <form method="POST" action="{{ route('homework.update', $homework->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Diák neve: <br>
            <input type="text" name="diak_nev" value="{{ $homework->diak_nev }}">
        </div>

        <div>
            Feladat: <br>
            <input type="text" name="feladat" value="{{ $homework->feladat }}">
        </div>

        <div>
            URL: <br>
            <input type="text" name="url" value="{{ $homework->url }}">
        </div>

        <div>
            <input type="submit" value="Confirm">
        </div>
    </form>
</body>
</html>
