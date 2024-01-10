

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    }
    body{
        border: 2px solid red;
        height: 800px;
        }

.form{
    width: 150px;
    height: 180px;
    border: 1px solid #ccc;
    margin: 50px 0;
    padding: 10px 20px;

    }

form{
    display: flex;
    gap: 20px;
}

  form input{
     margin-bottom: 12px;
 }

        form p{
            color: green;
        }

        .hero-btn{
            width: 80px;
            height: 30px;
            margin-top: 300px;
            margin-right: 300px;
        }

    </style>
</head>
<body>

    <form action="{{url('create')}}" method="POST">
        @csrf
        @for ($i = 1 ; $i <= $count; $i++)
            <div class="form">
                <h3>Product{{$i}}</h3>
                <p>Product name {{$i}}</p>
                <input type="hidden" name="id[]" value="{{$i}}">
                    <input type="text" name="name[]" > <br>
                    <p>Quantity {{$i}}</p>
                    <input type="number" name="quantity[]" > <br>
                    <p>Price {{$i}}</p>
                    <input type="number" name="price[]" > <br> <br>
            </div>

                @endfor
                <input type="submit" value="Send" name="s1" class="hero-btn">
        </form>


</body>
</html>




