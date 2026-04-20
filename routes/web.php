<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\IntervenantsController;
use App\Http\Controllers\SponsoringController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ContactController;

Route::get('/',             [HomeController::class,         'index'])->name('home');
Route::get('/programme',    [ProgrammeController::class,    'index'])->name('programme');
Route::get('/intervenants', [IntervenantsController::class, 'index'])->name('intervenants');
Route::get('/sponsoring',   [SponsoringController::class,   'index'])->name('sponsoring');
Route::get('/inscription',  [InscriptionController::class,  'index'])->name('inscription');
Route::post('/inscription', [InscriptionController::class,  'store'])->name('inscription.store');
Route::get('/contact',      [ContactController::class,      'index'])->name('contact');
Route::post('/contact',     [ContactController::class,      'send'])->name('contact.send');
