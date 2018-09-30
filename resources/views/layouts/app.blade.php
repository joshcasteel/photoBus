<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Photo Bus @yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .bottom {
                position: absolute;
                bottom: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .sub-title {
                font-size: 36px;
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

            .footer {
                height: 10vh;
            }

            .color-main {

            }
        </style>
</head>
<body>

<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links top-right">
                <a href="/">Main</a>
                <a target="_blank" href="//www.instagram.com">Instagram</a>
                <a href="/events">Events</a>
            </div>

            @yield('content')
        </div>
    </div>
    <div class="flex-center position-ref full-height color-main">
        <div class="content footer bottom">
            <div class="sub-title m-b-md">
                Ruby Strong
            </div>
        </div>
    </div>
</div>
</body>
</html>