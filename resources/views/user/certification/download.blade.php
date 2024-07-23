<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Descargar certificado</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

   <style>
      * {
         font-family: "Montserrat", sans-serif;
      }

      .certificate-background {
         /* width: 1280px;
         height: 720px; */
      }

      .text-center {
         text-align: center;
         display: flex !important;
         justify-content: center;
      }

      .certificate-name {
         position: absolute;
         top: 22%;
         left: 12%;
         font-size: 50px;
         color: #022170;
         font-weight: bold;
      }

   </style>
</head>
<body id="areaToPrint" class="certificate-background" style="background-image: url({{ asset('img/certificate.png') }}); background-repeat: no-repeat; background-position;">

   <div class="text-center">
      <p class="certificate-name" style="text-align: center;">
         {{ $user->nombre . ' ' . $user->apellido }}
      </p>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
   <script type="text/javascript" src="{{ asset('js/divjs.js') }}"></script>

   <script type="text/javascript">
      function printCertificate() {
         $("#areaToPrint").printElement();
      }

   </script>

   <script>
      $(window).on("load", function() {
         printCertificate();
      });

   </script>
</body>

</html>
