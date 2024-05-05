<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>None</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/style.css')
</head>

<body>
    <div class="row">
        <div class="col-2">
            @include('layout.nav')
        </div>
        <div class="col-10 pt-4">
            @yield('content')
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
