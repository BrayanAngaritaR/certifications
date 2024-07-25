<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
	public function store(Request $request, $id, $document_number, $date)
	{
		//Almacenar el certificado la primera vez

		//Obtener la información del usuario
		$user = User::where('numero_documento', $document_number)
			->first();

		$document_type = 'Cédula de ciudadanía';
		$name = 'Certificado de prueba';

		if($user){
			$document_type = $user->tipo_documento;
			$name = $user->nombre . ' ' . $user->apellido;
		}

		return view('user.certification.download', compact(['name', 'date', 'document_type', 'document_number']));
	}
}
