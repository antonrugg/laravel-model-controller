<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

        <!-- Styles -->
      
    </head>
    <body>
        <h1>Showing Movies from DB</h1>
            <main>
                @foreach($movies as $movie)
                <article>
                    <h2>Title: {{ $movie['title'] }}</h2> 
                    <p>Original Title: {{ $movie['original_title'] }}</p>
                    <p>Nationality: {{ $movie['nationality'] }}</p>
                    <p>Date: {{ $movie['date'] }}</p>
                    <p>Vote: {{ $movie['vote'] }}</p>
                </article>
                @endforeach
            </main>

                
            </div>
        </div>
    </body>
</html>
