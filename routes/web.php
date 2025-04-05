<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/send-email', [SendEmailController::class, 'sendEmails'])->name('send.email');
