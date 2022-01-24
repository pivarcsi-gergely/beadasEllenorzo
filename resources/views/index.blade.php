<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h1>Welcome to our page of Házi feladatok!</h1>
    <p>Currently, there are a total number of {{ $studentCount }} students, and {{ $finishedCount }}/{{ $studentCount }} has finished their homework.</p>
    <a href="{{ route('homework.index') }}">Go to listing</a>
</body>

</html>