@extends('app')
@section('content')
<body class="bg-blue-100">
   <div class="min-h-screen flex flex-col items-center justify-center bg-cover bg-center" style="background-image: url('path_to_your_image.png');">
      <div class="bg-white bg-opacity-75 p-8 rounded-lg shadow-lg w-full max-w-md">
         <div class="text-center mb-6">
            <img src="{{ asset('img/certificate.svg') }}" alt="TIC" class="mx-auto mb-4">
         </div>
         <h2 class="text-2xl font-bold mb-4 text-center text-[#040247]">Certificados</h2>
         @include('partials.forms._check-user')
      </div>
   </div>

   <!-- Error modal -->
   <div id="error-modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
      @include('partials.modals._error-not-found')
   </div>
</body>
@stop
