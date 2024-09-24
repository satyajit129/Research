<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;


Route::get('/sign-in',[\App\Http\Controllers\Authentication\AuthenticationController::class,'signIn'])->name('signIn');
Route::get('/sign-up',[\App\Http\Controllers\Authentication\AuthenticationController::class,'signUp'])->name('signUp');


Route::get('/journal-index',[JournalController::class,'journalIndex'])->name('journalIndex');
Route::get('/view-article',[JournalController::class,'viewArticle'])->name('viewArticle');
Route::get('view-editorial-board',[JournalController::class,'viewEditorialBoard'])->name('viewEditorialBoard');
Route::get('/all-journals',[JournalController::class,'allJournals'])->name('allJournals');
Route::get('/',[JournalController::class,'allJournals'])->name('allJournals');





