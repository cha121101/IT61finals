<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    @foreach ( $student as $key => $value )
        {{ $value->age }}
        {{ $value->studentname }}
        {{ $value->yearandsection }}

    @endforeach
    <form action="{{ route('create.student') }}" method="get">
        <button type="submit">Create</button>
    </form>
</body>
</html>