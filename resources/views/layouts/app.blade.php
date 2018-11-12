<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Wander Love Bus @yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

         <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links top-right">
                <a href="/">Main</a>
                <a target="_blank" href="//www.instagram.com/wanderlovebus">Instagram</a>
                <a target="_blank" href="//www.facebook.com/wanderlovebus">Facebook</a>
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