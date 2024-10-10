<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Customer name : {{ $data -> name }}</h4>
    <h4>Customer address : {{ $data -> rec_address }}</h4>
    <h4>Customer phone : {{ $data -> phone }}</h4>
    <h4>Product title : {{ $data -> product -> title }}</h4>
    <h4>Product price : {{ $data -> product -> price }}</h4>
    <img src="products/{{ $data->product->image }}" alt="" width="200px" height="200px;">
</body>
</html>
