<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('evtransfer/{event}', [TransferController::class, 'index'])->name('evtransfer');
