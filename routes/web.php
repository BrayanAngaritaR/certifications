<?php

use App\Http\Controllers\User\CertificationsController;
use App\Http\Controllers\User\CheckUserController;
use App\Http\Controllers\User\UserNotExistController;
use App\Http\Controllers\UserDoesNotHaveCertificationsController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    $users = User::take(3)->get();
    dd($users);
});

Route::get('/usuario-no-encontrado', [UserNotExistController::class, 'index'])->name('user.not-user.index');
Route::get('/usuario-sin-certificados', [UserDoesNotHaveCertificationsController::class, 'index'])->name('user.not-certificates.index');

Route::post('/verificar-usuario', [CheckUserController::class, 'store'])->name('user.verify');
Route::get('/certificaciones/document_type={document_type?}&document_number={document_number?}&search_key={search_key?}', [CertificationsController::class, 'index'])->name('user.certifications.index');

Route::get('/', function () {
    return view('welcome');
});
