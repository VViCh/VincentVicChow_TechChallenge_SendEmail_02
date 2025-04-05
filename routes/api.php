<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController2;

Route::post('/send-email', [SendEmailController2::class, 'sendEmail']);