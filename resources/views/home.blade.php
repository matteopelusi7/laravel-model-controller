<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>

    <div>

        @foreach ($movies as $movie)

            <div>
                <h3>Titolo:</h3>
                <p>{{ $movie['title'] }}</p>
            </div>
            <div>
                <h3>Titolo originale:</h3>
                <p>{{ $movie['original_title'] }}</p>
            </div>
            <div>
                <h3>Nazionalità:</h3>
                <p>{{ $movie['nazionality'] }}</p>
            </div>
            <div>
                <h3>Data:</h3>
                <p>{{ $movie['date'] }}</p>
            </div>
            <div>
                <h3>Voto:</h3>
                <p>{{ $movie['vote'] }}</p>
            </div>
            
        @endforeach
        
    </div>
    
</body>
</html>