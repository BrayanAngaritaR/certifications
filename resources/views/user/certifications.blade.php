@extends('app')
@section('content')
<body>

   <div class="text-center">
      <h2 class="text-2xl font-bold mb-4 text-center text-[#040247]">Certificados disponibles</h2>
   </div>

   {{-- <div class="max-w-screen-md flex justify-between gap-32 py-8">
      <div class="mb-4 w-full">
         <input type="date" id="document-number" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Ingresa el número de documento">
      </div>
      <div class="mb-4 w-full">
         <select id="document-type" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            <option disabled selected>Orientador</option>
         </select>
      </div>
   </div> --}}

   <div class="relative overflow-x-auto px-20 py-10">
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
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach($certifications as $certification)  
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     Sensibilización Ciberpaz
                  </th>
                  <td class="px-6 py-4">
                     {{ $certification->department }}
                  </td>
                  <td class="px-6 py-4">
                     {{  date("d M Y", strtotime($certification->date)) }}
                  </td>
                  <td>
                     <!-- Modal toggle -->
                     <button data-modal-target="certitificationModal{{ $loop->iteration }}" data-modal-toggle="certitificationModal{{ $loop->iteration }}" class="block font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg fill="#1C2033" width="18" height="18" version="1.1" id="lni_lni-more-alt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                           <g>
                              <circle cx="10.9" cy="32" r="8" />
                              <circle cx="32" cy="32" r="8" />
                              <circle cx="53.1" cy="32" r="8" />
                           </g>
                        </svg>
                     </button>

                     <!-- Main modal -->
                     <div id="certitificationModal{{ $loop->iteration }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                           <!-- Modal content -->
                           <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 border-2 border-green-600">
                              <!-- Modal header -->
                              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                 <h3 class="text-xl font-semibold text-red-500" style="color: #058641;">
                                    Por favor, verifica la información
                                 </h3>
                                 <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="certitificationModal{{ $loop->iteration }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Cerrar modal</span>
                                 </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-4 md:p-5 space-y-4">
                                 <div class="mb-2">
                                    <p class="text-black font-semibold">
                                       Nombre del curso
                                    </p>
                                    <p>Sensibilización Ciberpaz</p>
                                 </div>

                                 <div class="mb-2">
                                    <p class="text-black font-semibold">
                                       Lugar del curso
                                    </p>
                                    <p>{{ $certification->department }}</p>
                                 </div>

                                 <div class="mb-2">
                                    <p class="text-black font-semibold">
                                       Nombre 
                                    </p>
                                    <p>{{ $certification->name }}</p>
                                 </div>

                                 <div class="mb-2">
                                    <p class="text-black font-semibold">
                                       Tipo de documento
                                    </p>
                                    <p>{{ $certification->document_type }}</p>
                                 </div>

                                 <div class="mb-2">
                                    <p class="text-black font-semibold">
                                       Número de documento
                                    </p>
                                    <p>{{ $certification->document_number }}</p>
                                 </div>

                                 <div class="mb-2">
                                    <p class="text-black font-semibold">
                                       Fecha del curso
                                    </p>
                                    <p>{{  date("d M Y", strtotime($certification->date)) }}</p>
                                 </div>

                                 {{-- <div class="flex justify-center mt-5">
                                    <button class="bg-orange-400 text-white font-bold px-5 py-2.5 rounded-lg">Actualizar información</button>
                                 </div> --}}
                                 <div class="flex justify-center">
                                    <form method="POST" action="{{ route('user.certification.download', [$certification->id, $certification->document_number, date("d M Y", strtotime($certification->date))]) }}">
                                       @csrf
                                       <button type="submit" class="bg-green-600 text-white px-5 py-2.5 rounded-lg">
                                          Descargar certificado
                                       </button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>


</body>
@stop
