<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    lorem ispum bla bla

    <a href="{{ route('register') }}">Register</a>
    <a href="{{ route('login') }}">Login</a>

    <p class="text-primary">
        {{ session("error") }}
    </p>
</body>

</html>
