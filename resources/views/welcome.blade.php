<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
                display: flex;
                width: 800px;
                max-width: 100%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .w-1\/2 {
                width: 50%;
            }
        </style>

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" id="app">
                <div class="w-1/2">
                    <create-user></create-user>
                    <delete-user></delete-user>
                </div>
                <div class="w-1/2">
                    <subscribe-user></subscribe-user>
                </div>
            </div>
        </div>
    </body>
</html>
