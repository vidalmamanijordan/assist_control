<?php

use App\Http\Controllers\Admin\AssistController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\HelpController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\SedeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('users/export/', [UserController::class, 'export']);
Route::get('users/{user}/reset-password', [UserController::class, 'editPassword'])->name('users.edit-password');
Route::put('users/{user}/reset-password', [UserController::class, 'resetPassword'])->name('users.reset-password');
Route::resource('users', UserController::class)->names('users');
Route::put('events/{event}/change-status', [EventController::class, 'changeStatus'])->name('events.change-status');
Route::resource('events', EventController::class)->names('events');
Route::resource('sedes', SedeController::class)->names('sedes');
Route::resource('faculties', FacultyController::class)->names('faculties');
Route::resource('careers', CareerController::class)->names('careers');
Route::get('participants/import', [ParticipantController::class, 'import'])->name('participants.import');
Route::post('participants/import', [ParticipantController::class, 'importStore'])->name('participants.importStore');
Route::get('participants/export', [ParticipantController::class, 'export'])->name('participants.export');
Route::resource('participants', ParticipantController::class)->names('participants');
Route::get('assists/pdf', [AssistController::class, 'exportPdf'])->name('assists.pdf');
Route::resource('assists', AssistController::class)->names('assists');
Route::get('/registrations', [RegistrationController::class, 'index'])->name('registrations.index');
Route::get('/registrations/{registration}/create', [RegistrationController::class, 'create'])->name('registrations.create');
Route::post('/registrations/{registration}', [RegistrationController::class, 'store'])->name('registrations.store');
Route::get('/help', [HelpController::class, 'index'])->name('help.index');




