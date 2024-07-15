<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    $users = User::take(3)->get();
    dd($users);
});

Route::get('/', function () {
    return view('welcome');
});
