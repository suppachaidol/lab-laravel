<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'We-Bless')</title>
</head>
<body>
    <div>
        @include('layouts.menu')
    </div>

    <div>
        @yield('content')
    </div>

    <div>
        Footer
    </div>
</body>
</html>
