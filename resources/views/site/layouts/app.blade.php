<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title') - {{config('app.name')}}</title>
</head>
<body>
    <div id="app" class="container mx-auto">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
