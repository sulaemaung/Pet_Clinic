<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hi this is user home</h1>
     Role={{Auth::user()->role}}
     <form action="{{route('logout')}}" method="post">
         @csrf
          <button type="submit">logout</button>
    </form>
</body>
</html>
