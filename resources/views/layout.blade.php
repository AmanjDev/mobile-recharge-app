<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoCharge</title>
    <link type="text/css" rel="stylesheet" href="{{mix('css/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{mix('css/custom.css')}}">
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    <script type="text/javascript" src="{{mix('js/custom.js')}}"></script>
    @yield('head')
</head>
<body>
    <div class="container-fluid">
        @yield('body')
    </div>
</body>
</html>
