
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
         body{
     width: 300px;
    border: 1px solid;
    margin-top: 200px;
    margin-left: 550px;
    padding: 10px 20px;}

    body h1{
        margin-left: 70px;
        color: red;
    }

    body h2{
        margin-top: 30px;
    }
    </style>
</head>
<body>

    <h1>korzinka.uz</h1>
@foreach ($data as $product)

    <p>
       <b>{{ $product['name'] }}:</b>
      {{ $product['quantity'] }} x {{ $product['price'] }} = {{ $product['TotalPrice'] }}

    </p>
@endforeach

<h2> Total: {{$sum}}</h2>

</body>
</html>
