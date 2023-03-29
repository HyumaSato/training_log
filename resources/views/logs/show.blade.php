<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logs</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="date">
            {{ $log->date }}
        </h1>
        <div class="content">
            <div class="content__log">
                <h3>本日の記録</h3>
                <p>   {{ $log->training }}
                <p>   {{ $log->meal }}
                <p>   {{ $log->memo }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/dashboard">back</a>
        </div>
    </body>
</html>