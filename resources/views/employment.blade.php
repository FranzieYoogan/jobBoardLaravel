<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/employment.css')}}">

</head>
<body>

    @include('header')

    @foreach ($jobs as $job)

    <section class="containerAll">

       

       
        <div>

            <div class="containerItems">

            <div>
                <h1>{{$job->jobName}}</h1>
                <p class="pStyle">{{$job->jobContent}}</p>
            </div>
       

            <div>
                <div style="display: flex; justify-content: center">
                    <img class="imageStyle" src="{{$job->jobImage}}" alt="">
                </div>
                
                <h5 class="locationStyle">Location: {{$job->jobCity}}</h3>
                <h5>Company: {{$job->jobCompany}}</h5>
                
                <div style="display: flex;justify-content: center">
                    <button type="submit" class="btnStyle btn btn-primary">Apply Now</button>
                </div>
               
            </div>

        </div>

       

    </div>
 
</section>
    @endforeach
    
</body>
</html>