<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Home page by route with view</h1>
    @foreach ($product as $pro)
        @if ($pro=='pens')
                {{'ok find'}}
            @elseif($pro=='paper')
                {{'paper'}}
            @else
                {{'not find'}}
        @endif
    @endforeach
</body>
</html>