<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
   <title>Certificaciones MINTIC</title>
   @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
   <div class="bg-blue-700">
      <div class="">
         <div class="header-govco py-2 px-10">
            <a href="https://www.gov.co/" target="blank" title="Ir al portal GOV.CO">
               <img src="https://www.mintic.gov.co/portal/715/channels-616_header_govco.png" alt="Imagen logo GovCo" class="w-24">
               <span class="sr-only">Logo Gobierno de Colombia</span>
            </a>
         </div>
      </div>
   </div>

   <div class="bg-white">
      <div class="">
         <div class="header-govco py-4 px-10">
            <a href="{{ url('/') }}" title="Ir al inicio">
               <img src="{{ asset('img/logo.png') }}" alt="Colombia potencia de vida" class="w-8">
            </a>
         </div>
      </div>
   </div>

   @yield('content')
</html>
