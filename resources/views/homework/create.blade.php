<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <h1>New Homework</h1>
    <form method="POST" action="{{ route('homework.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Diák neve: <input type="text" name="diak_nev">
        </div>
        <div>
            Feladat neve: <input type="text" name="feladat">
        </div>
        <div>
            URL: <input type="url" name="url">
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>

</html>