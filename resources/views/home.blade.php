<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Movies</title>
</head>
<body>
    <h1 class="text-center mb-5">Movies</h1>
    <div class="d-flex container text-center flex-wrap row-gap-4 gap-4 justify-content-center">

    @foreach ($movies as $movie)
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->originalTitle}}</h6>
                <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
                <p class="card-text">Data d'uscita: {{$movie->date}}</p>
                <p class="card-text">Voto: {{$movie->vote}}</p>
                
                {{--<a href="#" class="card-link">Another link</a>--}}
                </div>
            </div>
        </div>
    @endforeach
    </div>
</body>
</html>