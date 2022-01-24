<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $homework->diak_nev }}</title>
</head>

<body>
    <h1>{{ $homework->feladat }}</h1>
    <p>
        feladat URL-je: <a href="{{ $homework->url}}">{{ $homework->url }}</a>
    </p>
    <p>
    <p><a href="{{ route('homework.index') }}">Link back to the list</a></p>
</body>

</html>