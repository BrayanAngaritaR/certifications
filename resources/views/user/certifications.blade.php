@extends('app')
@section('content')
<body>

   <div class="text-center">
      <h2 class="text-2xl font-bold mb-4 text-center text-[#040247]">Certificados disponibles</h2>
   </div>

   <div class="max-w-screen-md flex justify-between gap-32 py-8">
      <div class="mb-4 w-full">
         <input type="date" id="document-number" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Ingresa el número de documento">
      </div>
      <div class="mb-4 w-full">
         <select id="document-type" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            <option disabled selected>Orientador</option>
         </select>
      </div>
   </div>

   <div class="relative overflow-x-auto px-20">
      <div class="rounded-xl border border-black overflow-hidden">
         <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                  <th scope="col" class="px-6 py-3">
                     Nombre del curso
                  </th>
                  <th scope="col" class="px-6 py-3">
                     Lugar del curso
                  </th>
                  <th scope="col" class="px-6 py-3">
                     Fecha del curso
                  </th>
                  <th scope="col" class="px-6 py-3">
                     Nombre Orientador
                  </th>
                  <th scope="col" class="px-6 py-3">
                  </th>
               </tr>
            </thead>
            <tbody>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     Apple MacBook Pro 17"
                  </th>
                  <td class="px-6 py-4">
                     Silver
                  </td>
                  <td class="px-6 py-4">
                     Laptop
                  </td>
                  <td class="px-6 py-4">
                     $2999
                  </td>
               </tr>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     Microsoft Surface Pro
                  </th>
                  <td class="px-6 py-4">
                     White
                  </td>
                  <td class="px-6 py-4">
                     Laptop PC
                  </td>
                  <td class="px-6 py-4">
                     $1999
                  </td>
               </tr>
               <tr class="bg-white dark:bg-gray-800">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     Magic Mouse 2
                  </th>
                  <td class="px-6 py-4">
                     Black
                  </td>
                  <td class="px-6 py-4">
                     Accessories
                  </td>
                  <td class="px-6 py-4">
                     $99
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>


</body>
@stop
