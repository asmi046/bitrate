<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::post('/leads', [LeadController::class, 'store'])
    ->middleware('throttle:leads')
    ->name('leads.store');
