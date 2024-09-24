<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function journalIndex()
    {
        return view('frontend.pages.journal.index');
    }
    public function viewArticle(){
        return view('frontend.pages.journal.view-article');
    }

    public function viewEditorialBoard(){
        return view('frontend.pages.journal.editorial-board-content');
    }
    public function allJournals(){
        return view('frontend.pages.journal.all-journals');
    }
}
