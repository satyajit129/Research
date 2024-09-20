<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;


Route::get('/sign-in',[\App\Http\Controllers\Authentication\AuthenticationController::class,'signIn'])->name('signIn');
Route::get('/sign-up',[\App\Http\Controllers\Authentication\AuthenticationController::class,'signUp'])->name('signUp');


Route::get('/',[JournalController::class,'journalIndex'])->name('journalIndex');
Route::get('/view-article',[JournalController::class,'viewArticle'])->name('viewArticle');






