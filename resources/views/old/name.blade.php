<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<center>
<h1> login form </h1>
<form action="{{route('insert')}}" method="post">
@csrf
<input type="text" name="fname" value="" placeholder="Enter Fisrt name"><br><br>
<input type="text" name="lname" value="" placeholder="Enter last name"><br><br>
<input type="text" name="email" value="" placeholder="Enter email"><br><br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>


</center>


</body>
</html>