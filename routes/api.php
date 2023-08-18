<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;


Route::post('/send-email', [ MailController::class, 'sendEmail' ]);
Route::get('/', function () {
    return view('welcome');
});
