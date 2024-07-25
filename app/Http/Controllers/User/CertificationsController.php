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
		$name = "Invitado";
		$document_type = 'CC';

		if($user) {
			$name = $user->nombre . ' ' . $user->apellido;
			$document_number = $user->numero_documento;
			$document_number = $user->numero_documento;
			$document_type = $user->tipo_documento;
		}

		foreach ($data_json as $item) {
			$certification = json_decode($item['json_answer'], true);

			$certifications->push((object) [
				'id' => $item['id'],
				'date' => $item['created_at'],
				'name' => $name,
				'document_number' => $document_number,
				'document_type' => $document_type,
				'email' => $certification['1719340641698'],
				'department' => $certification['1719340680118'],
				'gender' => $certification['1719340768187'],
			]);
		}

		return view('user.certifications', compact([
			'user', 'certifications'
		]));
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
