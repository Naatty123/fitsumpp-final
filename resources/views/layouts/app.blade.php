<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitsum Advert</title>
    @production
    @php
        $module = json_decode();
    @endphp

    @else 
    @vite
    @endproduction
</head>
<body>
<x-Header />
<main>
    @yield('index')
</main>
<x-Footer />    
</body>
</html>