<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/array.css">
    <title>Document</title>
</head>

<body>
    @foreach($array as $product)
    <div class="array">
        {{$product["title"]}}
        {{$product["price"]}}
        <img class="img" src="{{$product['path']}}" alt="{{$product['title']}}">
    </div>
    @endforeach
</body>

</html>