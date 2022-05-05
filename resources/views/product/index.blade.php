<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--<a href="{{ route('categories.create') }}">Creat</a>--}}
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Create_at</th>
        <th>Updata_at</th>
{{--        <th></th>--}}
{{--        <th></th>--}}

    </tr>
    @foreach($Products as $Product)
        <tr>
            <td>{{$Product->id}}</td>
            <td>{{$Product->name}}</td>
            <td>{{$Product->price}}</td>
            <td>{{$Product->created_at}}</td>
            <td>{{$Product->updated_at}}</td>
{{--            <td><a href="{{route('categories.edit', $category->id)}}">Edit</a></td>--}}
{{--            <td>--}}
{{--                <form action="{{route('categories.destroy', $category->id)}} " method="POST">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit">Delete</button>--}}
{{--                </form>--}}
{{--            </td>--}}
        </tr>
    @endforeach
</table>
</body>
</html>
