<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Testing integrasi tailwind</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <h1 class="text-6xl text-slate-800 font-bold bg-gradient-to-r from-sky-600 to-yellow-500 bg-clip-text text-transparent capitalize mt-20">intergrasi udah ini oke !</h1>

        <img src="{{ Vite::asset('resources/img/1.jpg') }}" alt="sample foto" srcset="">
    </body>
</html>
