<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('/assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        {{--<x-jet-banner />
        @livewire('navigation-menu')
--}}
        <!-- Page Heading -->
       <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
               {{-- {{ $header }}--}}

               Sauna Piscina Israel(Configuracion de sesiones)
               <a href="{{url('dashboard')}}">Regresar al dashboard</a>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
            
        </main>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
