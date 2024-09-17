<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;

Route::get('/',[JournalController::class,'journalIndex'])->name('journalIndex');




