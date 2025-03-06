<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostcodeLookupController;
use App\Http\Controllers\MpController;

Route::get('/', [PostcodeLookupController::class, 'get'])->name('postcode.show');
Route::post('/', [PostcodeLookupController::class, 'post'])->name('postcode.lookup');

Route::get('/write/{id}', [MpController::class, 'get'])->name('mp.write');
Route::post('/write/{id}', [MpController::class, 'save_message'])->name('mp.save_message');
Route::post('/write/{id}/send', [MpController::class, 'send_email'])->name('mp.send_email');
Route::get('/write/{id}/thanks', [MpController::class, 'thanks'])->name('mp.thanks');
