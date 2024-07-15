<form action="{{ route('user.verify') }}" method="POST">
   @csrf
   <div class="mb-4">
      <label for="document_type" class="block text-gray-700 font-bold mb-2">Tipo de documento</label>
      <select id="document_type" name="document_type" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
         <option disabled>Selecciona el tipo de documento</option>
         <option value="cc">Cédula de ciudadanía</option>
         <option value="ce">Cédula de extranjería</option>
         <option value="ti">Tarjeta de identidad</option>
      </select>
   </div>
   <div class="mb-4">
      <label for="document_number" class="block text-gray-700 font-bold mb-2">Número</label>
      <input type="text" name="document_number" id="document_number" class="block w-full bg-white border border-gray-300 rounded-full shadow-sm py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Ingresa el número de documento">
   </div>
   <div class="text-center">
      <button type="submit" class="bg-[#040247] text-white font-bold py-2 px-8 rounded-full shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
         Consultar
      </button>
   </div>
</form>