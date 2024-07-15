<?php

use App\Http\Controllers\User\CertificationsController;
use App\Http\Controllers\User\CheckUserController;
use App\Http\Controllers\User\UserNotExistController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    $users = User::take(3)->get();
    dd($users);
});

Route::get('/usuario-no-encontrado', [UserNotExistController::class, 'index'])->name('user.not-user.index');
Route::post('/verificar-usuario', [CheckUserController::class, 'store'])->name('user.verify');
Route::get('/certificaciones', [CertificationsController::class, 'index'])->name('user.certifications.index');

Route::get('/', function () {
    return view('welcome');
});
