<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container p-4 mt-5 border border-primary shadow-lg p-3 mb-5 rounded">  
@yield('content')
</div>
</body>
</html>