<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Training_log</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>トレーニング記録！</h1>
        <div class='logs'>
        @foreach ($logs as $log)
            <div class='log'>
                 <h2 class='date'>
                     <a href="/log/{{ $log->id }}">{{ $log->date }}</a>
                </h2>
                    <a href='/log/create'>create</a>
            </div>
        @endforeach
        </div>
    </body>
</html>