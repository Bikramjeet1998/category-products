<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> welcome to home page</h1>
    <br>
    <h3> how to use laravel </h3>

    @if ($name =="bikram")
    hello {{$name}}
    @endif

    @for($i=0;$i<=8;$i++) {{$i+1}} @endfor </body>

</html>