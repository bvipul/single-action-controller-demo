<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo Single Action Controller | @yeild('title') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{ Html::style(mix('css/app.css')) }}
    </head>
    <body>
        <div class="container">
            <div class="jumbotron text-center">
                <h2>Single Action Controller Demo</h2>
            </div>
            @include('messages')
            @yield('content')
        </div>
        {{ Html::script(mix('js/app.js')) }}
    </body>
</html>
