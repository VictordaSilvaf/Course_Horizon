<?php

use App\Jobs\ExempleJob;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('teste-mail', function () {
    Mail::to('victor@teste.com.br')
        ->send(new TestMail);

    return 'ok - mail sended';
});

Route::get('teste-job', function () {
    ExempleJob::dispatch(['exemple' => 'value']);
    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
