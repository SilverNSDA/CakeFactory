<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Cake Factory')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/custom-style.css')}}" type="text/css" rel="stylesheet"/>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        {{--  Jquery  --}}
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
            crossorigin="anonymous"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/custome-js.js')}}"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="left-space"></div>
        <div class="right-space"></div>
        <div class="top-space"></div>
        <div class="container">
            @include('include/navigation')
            <hr>
            <div style="min-height:70vh;">
                @include('include/err')
                @yield('body')
            </div>
            <hr>
            <div id="footer" style="bottom:0px; font-weight:500; color:rgb(30,30,30);">
                <div class="center under-line">
                    About us
                </div>
                <div class="container">
                    <div class="col-sm-3" style="display:inline-block;">
                        Hope you please with our service
                    </div>
                    <div class="col-sm-7" style="text-align:right;float:right;">
                        <a style="text-align:left;">Made by 1560008</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
