<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index'])->name('home');
//Route::resource('alltransfer', TransferController::class);

Route::get('alltransfer/{event}', [TransferController::class, 'index'])->name('alltransfer');
Route::post('alltransfer/{eventId}/store', [TransferController::class, 'store'])->name('alltransfer.store');
//Route::post('alltransfer', [TransferController::class, 'store']);
//Route::get('alltransfer/request/{event}', [TransferController::class, 'index'])->name('alltransfer/request');
