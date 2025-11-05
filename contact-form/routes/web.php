<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'showForm']);

Route::post('/submit-form', [Controller::class, 'store']);

Route::post('/send-email', [MailController::class,'SendEmail'])
    ->name(name:'send-email');