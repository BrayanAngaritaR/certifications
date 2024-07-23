<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDoesNotHaveCertificationsController extends Controller
{
    public function index()
    {
        return view('user.not-certificates');
    }
}
