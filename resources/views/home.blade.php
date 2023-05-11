<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page model-controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center p-4">My Films List</h1>
    <div class="container d-flex flex-wrap justify-content-around">

        @foreach($movies as $movie)
        <div class="card col-5 m-3" style="width: 18rem;">
            <div class="card-header">
            {{$movie->title}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Titolo originale: {{$movie->original_title}}</li>
                <li class="list-group-item">Nazionalità: {{$movie->nationality}}</li>
                <li class="list-group-item">Data: {{$movie->date}}</li>
                <li class="list-group-item">Voto: {{$movie->vote}}</li>
            </ul>
        </div>
        @endforeach
    </div>
</body>
</html>