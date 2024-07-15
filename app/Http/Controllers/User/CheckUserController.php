<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Enrollment;
use Illuminate\Http\Request;

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
				$document_type = 'Cedula de ciudadania';
				break;
			case 'ti':
				$document_type = 'Tarjeta de identidad';
				break;
			default:
				$document_type = 'Cedula de extranjería';
				break;
		}

		$user = User::where('idnumber', $request->document_number)
			->where('department', 'like', '%' . $document_type . '%')
			->first();

		if ($user) {
			//Verificar los cursos del usuario
			$enrollments = Enrollment::where('userid', $user->id)->get();

			// dd($enrollments);
			return redirect()->route('user.certifications.index');
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
