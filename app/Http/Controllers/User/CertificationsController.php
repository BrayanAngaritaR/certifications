<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class CertificationsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$api_search_url = env('API_SEARCH_URL');
		$current_url = URL::current();
		$api_search_key = Str::after($current_url, '&search_key=');
		$document_number = Str::between($current_url, '&document_number=', '&');

		$user = User::where('numero_documento', $document_number)
			->first();

		$response = Http::get($api_search_url . $api_search_key . '&search_value=' . $document_number);
		$data_json = $response->json();
		$certifications = collect();

		// "id_registro" => 519140
		// "tipo_servicio" => "Llegamos con TIC"
		// "fecha" => "1979-04-09"
		// "fecha_registro" => "2022-10-04"
		// "hora_registro" => "17:09:39"
		// "tipo_documento" => "Cédula de ciudadanía"
		// "numero_documento" => "22645941"
		// "nombre" => "ENAURIS"
		// "apellido" => "OLIVEROS"
		// "email" => "enaurisoliveros@gmail.com"
		// "departamento" => 25
		// "municipio" => 918
		// "area" => "Zona urbana"
		// "ocupacion" => "Estudiante"
		// "celular" => "314342677"
		// "sexo" => "Mujer"
		// "genero" => "Femenino"
		// "educacion" => "No registra"
		// "etnia" => "Ninguna"
		// "discapacidad" => "No registra"
		// "estrato" => "No registra"
		// "autorizacion_datos" => "Sí"
		// "autorizo_envio_informacion" => "Sí"
		// "formador" => 1
		// "entidad_referida" => 1
		// "date_created" => null
		// "evento" => null

		foreach ($data_json as $item) {
			$certification = json_decode($item['json_answer'], true);

			$certifications->push((object) [
				'date' => $certification['id'],
				'name' => $certification['1719340555934'],
				'document_number' => $certification['1719340565750'],
				'document_type' => $certification['1719340584153'],
				'email' => $certification['1719340641698'],
				'city' => $certification['1719340654349'],
				'department' => $certification['1719340680118'],
				'gender' => $certification['1719340768187'],
			]);
		}

		return view('user.certifications', compact('certifications'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		//
	}
}
