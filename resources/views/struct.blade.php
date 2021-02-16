<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link type="stylesheet" type="text/css" href="{!! asset('/css/bootsrap.min.css') !!}">
    <script src="{!! asset('/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('/js/jquery-3.5.1.min.js') !!}"></script>
    <script src="{!! asset('/js/popper.min.js') !!}"></script>
</head>
<body>
<div class="nav-bar"></div>
@yield('content')
<div class="footer"></div>
</body>
</html>