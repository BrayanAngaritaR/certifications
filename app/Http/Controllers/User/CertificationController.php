<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
	public function store(Request $request, $id, $document_number)
	{
		//Almacenar el certificado la primera vez

		//Obtener la información del usuario
		$user = User::where('numero_documento', $document_number)
			->first();

		return view('user.certification.download', compact('user'));
	}
}
