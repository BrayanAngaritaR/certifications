<div class="relative p-4 w-full max-w-2xl max-h-full">
   <!-- Modal content -->
   <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
         <a href="{{ url('/') }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="error-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Cerrar ventana</span>
         </a>
      </div>
      <!-- Modal body -->
      <div class="p-4 md:p-5 space-y-4 text-center">
         <h2 class="text-red-600 font-semibold text-xl">No hay cursos asociados</h2>
         <p class="text-base leading-relaxed text-dark font-semibold mx-auto w-[360px] py-6">
            Por favor revisa el tipo o número de documento.
         </p>
      </div>
   </div>
</div>
