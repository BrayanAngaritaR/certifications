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
         font-family: "Montserrat", sans-serif !important;
      }

      .text-center {
         text-align: center;
         display: flex !important;
         justify-content: center;
      }

      .certificate-name {
         position: absolute;
         top: 25%;
         left: 12%;
         font-size: 45px;
         color: #022170;
         font-weight: bold;
      }

      .certificate-date {
         position: absolute;
         bottom: 5%;
         /* left: 25%; */
         font-size: 14px;
         color: #ee5c0e;
         font-weight: bold;
      }

      .certificate-info {
         position: absolute;
         bottom: 2%;
         font-size: 12px;
         color: #3d3d3d;
         font-weight: bold;
      }

      @media print {
         @page {
            margin: 0;
         }

         body {
            margin: 1.6cm;
         }
      }

      @page {
         size: landscape;
      }

   </style>
</head>
<body id="areaToPrint" class="certificate-background" style="background-image: url({{ asset('img/certificate.png') }}); background-repeat: no-repeat; background-position;">

   <div class="text-center">
      <p class="certificate-name" style="text-align: center;">
         {{ $name }}
      </p>

      <p class="certificate-date" style="text-align: center;">
         La sensibilización se realizó el {{ $date }}
      </p>

      <p class="certificate-info" style="text-align: center;">
         {{ $document_type }} - {{ $document_number }}
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
