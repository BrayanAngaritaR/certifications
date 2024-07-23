<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckUserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		//
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
		switch ($request->document_type) {
			case 'cc':
				$short = 'cc';
				$document_type = 'Cedula de ciudadania';
				break;
			case 'ti':
				$short = 'ti';
				$document_type = 'Tarjeta de identidad';
				break;
			default:
			$short = 'ce';
				$document_type = 'Cedula de extranjería';
				break;
		}

		$user = User::where('numero_documento', $request->document_number)
			->where('tipo_documento', 'like', '%' . $document_type . '%')
			->first();

		$api_search_key = env('API_SEARCH_KEY');

		if ($user) {
			return redirect()->route('user.certifications.index', [
				'document_number' => $request->document_number, 
				'document_type' => $short, 
				'search_key' => $api_search_key
			]);
		} else {
			return redirect()->route('user.not-user.index');
		}
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
