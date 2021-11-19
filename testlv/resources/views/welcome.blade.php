<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                max-width: 1360px;
                margin: 0 auto;
                position: relative;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <thder/>
            <app/>
            <buttom/>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
