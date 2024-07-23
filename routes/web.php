<?php

use App\Http\Controllers\User\CertificationController;
use App\Http\Controllers\User\CertificationsController;
use App\Http\Controllers\User\CheckUserController;
use App\Http\Controllers\User\UserNotExistController;
use App\Http\Controllers\UserDoesNotHaveCertificationsController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/usuario-no-encontrado', [UserNotExistController::class, 'index'])->name('user.not-user.index');
Route::get('/usuario-sin-certificados', [UserDoesNotHaveCertificationsController::class, 'index'])->name('user.not-certificates.index');

Route::post('/verificar-usuario', [CheckUserController::class, 'store'])->name('user.verify');
Route::get('/certificaciones/document_type={document_type?}&document_number={document_number?}&search_key={search_key?}', [CertificationsController::class, 'index'])->name('user.certifications.index');
Route::post('/certificaciones/{id}/{document_number}/descargar', [CertificationController::class, 'store'])->name('user.certification.download');

Route::get('/', function () {
    return view('welcome');
});
