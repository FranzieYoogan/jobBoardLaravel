<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">

</head>
<body>

    @include('header')
    <h1>Hello {{session('personName')}}</h1>

    <section class="containerAll">

   
    @foreach ($user as $item)
        
    <div class="containerItems">
        <img class="imageStyle" src="{{$item->personImage}}" alt="">

        <div>
            <h1>{{$item->personTitle}}</h1>
            <p>Current Position: {{$item->personCurrent}} | Languages {{$item->personLanguages}}</p>
        </div>
   
    </div>
    

    @endforeach
    
</section>

<section class="containerAll2">

    <img class="serverStyle" src="{{asset('/icons/server.png')}}" alt="">

    <h1 class="titleStyle">Laravel Job Board |  Developed By Franzie </h1> 
    <a href="https://github.com/FranzieYoogan"><img class="githubStyle" src="{{asset('/icons/github.png')}}" alt=""></a>
</section>
    
</body>
</html>