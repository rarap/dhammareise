<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('alltransfer/{event}', [TransferController::class, 'index'])->name('alltransfer');
//Route::get('alltransfer/request/{event}', [TransferController::class, 'index'])->name('alltransfer/request');
