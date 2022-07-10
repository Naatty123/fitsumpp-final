<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitsum Advert</title>
    @production
    @php
     $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
     
    
    @endphp
    <link rel="stylesheet" href="public/build/{{ $manifest['resources/css/tailwind.css']['file'] }}">
    <script src="public/build/{{$manifest['resources/scripts/main.ts']['file']}}"></script>

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