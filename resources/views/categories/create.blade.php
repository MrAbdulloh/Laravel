<!doctype html>
<html lang="F">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route('categories.store')}}">back</a>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <lable>
        Name:
        <input type="text" name="name">
    </lable>
    <input type="submit">

</form>
</body>
</html>
