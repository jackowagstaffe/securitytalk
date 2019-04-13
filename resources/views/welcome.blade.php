<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Super Cool Social Network</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Cute+Font|Hind" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
            h1 {
                font-family: 'Cute Font', sans-serif;
                font-size: 4em;
                margin: 0;
                color: red;
                text-shadow: #9561e2 3px 3px 0px;
            }
            .content {
                margin: 0;
            }
            .header {
                width: 100%;
                background-color: #eacec9;
                margin: 0;
                padding: 20px;
            }
            p {
                font-family: 'Hind', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="header">
                    <h1>Super Cool Social Network</h1>
                </div>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <p>You should sign up for the social network so that you can communicate with your friend and or relative.</p>
            </div>
        </div>
    </body>
</html>
