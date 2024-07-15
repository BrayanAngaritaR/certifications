<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
   @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
   <!-- Main modal -->
   <div id="error-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
               <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="error-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Cerrar ventana</span>
               </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4 text-center">
               <h2 class="text-red-600 font-semibold text-xl">No estás registrado</h2>
               <p class="text-base leading-relaxed text-dark font-semibold mx-auto w-[360px] py-6">
                  Por favor revisa el tipo o número de documento, si no te invitamos a registrarte.
               </p>

               <div class="py-10">
                  <a href="https://registrodatic.ciberpaz.gov.co/iniciacontic/" target="_blank" class="my-10 bg-[#E80046] px-10 rounded-full py-2.5 text-white">
                     Registrarse
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Main modal -->
   <div id="no-courses-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
               <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="no-courses-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Cerrar ventana</span>
               </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4 text-center">
               <h2 class="text-red-600 font-semibold text-xl">No hay cursos asociados</h2>
               <p class="text-base leading-relaxed text-dark font-semibold mx-auto w-[360px] py-6">
                  Por favor revisa el tipo o número de documento.
               </p>

               <div class="py-10">
                  <button data-modal-hide="no-courses-modal" class="my-10 bg-[#E80046] px-10 rounded-full py-2.5 text-white">
                     Volver
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>

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
            <a href="https://www.gov.co/" target="blank" title="Ir al portal GOV.CO">
               <img src="{{ asset('img/logo.svg') }}" alt="Colombia potencia de vida" class="w-48">
            </a>
         </div>
      </div>
   </div>

   <body class="bg-blue-100">
      <div class="min-h-screen flex flex-col items-center justify-center bg-cover bg-center" style="background-image: url('path_to_your_image.png');">
         <div class="bg-white bg-opacity-75 p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="text-center mb-6">
               <img src="{{ asset('img/certificate.svg') }}" alt="TIC" class="mx-auto mb-4">
            </div>
            <h2 class="text-2xl font-bold mb-4 text-center text-[#040247]">Certificados</h2>
            <form>
               <div class="mb-4">
                  <label for="document-type" class="block text-gray-700 font-bold mb-2">Tipo de documento</label>
                  <select id="document-type" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                     <option disabled>Selecciona el tipo de documento</option>
                     <option value="cc">Cédula de ciudadanía</option>
                     <option value="ce">Cédula de extranjería</option>
                     <option value="ti">Tarjeta de identidad</option>
                  </select>
               </div>
               <div class="mb-4">
                  <label for="document-number" class="block text-gray-700 font-bold mb-2">Número</label>
                  <input type="text" id="document-number" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Ingresa el número de documento">
               </div>
               <div class="text-center">
                  <button type="submit" class="bg-[#040247] text-white font-bold py-2 px-8 rounded-full shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                     Consultar
                  </button>
               </div>
            </form>
         </div>

         <!-- Modal toggle -->
         <button data-modal-target="error-modal" data-modal-toggle="error-modal" class="block text-dark" type="button">
            Abrir modal de error
         </button>

         <!-- Modal toggle -->
         <button data-modal-target="no-courses-modal" data-modal-toggle="no-courses-modal" class="block text-dark" type="button">
            Abrir modal de NO cursos
         </button>
      </div>
   </body>
</html>
