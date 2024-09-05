<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/header.css')}}">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          @if (!session('personName'))
              
         
          <a class="navbar-brand" href="/"><img class="suitcaseStyle" src="{{asset('/icons/suitcase.png')}}" alt=""> <span class="jobSpan">Job</span>  <span class="portalSpan">Portal</span> </a>
          @else

          <a class="navbar-brand" href="/employers"><img class="suitcaseStyle" src="{{asset('/icons/suitcase.png')}}" alt=""> <span class="jobSpan">Job</span>  <span class="portalSpan">Portal</span> </a>

          @endif
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="divHeader collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">

                @if (!session('personName'))

                <a class="nav-link" href="/">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cadastro</a>
              </li>


              @else

              <li class="nav-item">
                <a class="nav-link" href="/employers">Employers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">{{session('personName')}} {{session('personLastName')}}</a>
              </li>
              
                @endif
                
          
            </ul>
          </div>
        </div>
      </nav>
    
</body>
</html>