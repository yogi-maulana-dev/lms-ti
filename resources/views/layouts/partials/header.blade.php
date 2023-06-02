<!DOCTYPE html>
<html class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ Vite::asset('resources/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/assets/img/favicon.png')}}" />
    <title>dashboard</title>
    {{-- @vite('resources/css/app.css') --}}
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ Vite::asset('resources/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{ Vite::asset('resources/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ Vite::asset('resources/assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 hidden dark:hidden min-h-75"></div>