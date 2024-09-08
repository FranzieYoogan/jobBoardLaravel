<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{asset('/css/employers.css')}}">

</head>
<body>

    @include('header')

    <section class="containerTitle">


        <div>

      
        <div style=" text-align: center"> 
            <h1>Top Jobs in the industry</h1>

                <p class="textStyle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat odit laboriosam id! Cupiditate quam pariatur fugiat. Saepe molestiae nesciunt fugiat, quo expedita non magnam fugit quis sequi placeat quod hic
                </p>
        </div>

            <form method="POST" action="/employers" class="containerInput">
                @csrf

                <input type="text" name="searchInput" class="inputStyle" required> <button type="submit" class="btn btn-primary">Search</button>

            </form>
        

            </div>
   
    </div>
   

</section>

<section>

    <h1 class="allJobs">All Jobs ({{$peopleCount}})</h1>

</section>

<section class="containerJobs2">
        
   

        @foreach ($jobs as $job)
        <div  class="containerJobs">
        <div style="display: flex; gap: 1em; padding: 5px; border-bottom: 1px solid black; width: 453%">

     
        <div>
            <img class="jobsImage" src="{{$job->jobImage}}" alt="">
        </div>
       
        <div>
            <h1>{{$job->jobName}}</h1>
            <p>{{$job->jobCity}} - {{$job->jobState}}</p>
        </div>
    </div>

        @endforeach
 

</div>

</section>
    
</body>
</html>