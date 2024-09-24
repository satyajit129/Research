@extends('frontend.global.frontend_master')
@section('title', 'Journals')
@section('frontend_custom_stylesheet')
    <style>
        .margin-bottom{
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('frontend_content')
<main>
    <div class="view-article-hero">
        <div class="container-xxl">
            <div class="view-artical-content-wrapper">
                <div class="view-artical-content">
                    <div class="about-journal-left-content">
                        <span class="view-article-category-top">Computer</span>
                        <h1 class="journal-title">Computer Simulation and Health Analysis</h1>
                        <p class="journal-issn">ISSN No: 0021-9979</p>
                        <p class="publishing-option">Publishing Option</p>
                        <div class="author-guide">
                            <p>Guide For Authors <i class="fa-solid fa-square-arrow-up-right"></i></p>
                            <p>Track your paper <i class="fa-solid fa-chevron-down"></i></p>
                        </div>

                        <div class="action-buttons">
                            <a class="btn submit-paper-btn" style="color: white;">Submit Paper</a>
                            <a href="{{ route('viewArticle') }}" class="btn submit-paper-btn" style="color: white;">View Article</a>
                        </div>
                    </div>

                    <div class="about-journal-right-content">
                        <div class="author-info">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="browse-all-journal">
        <div class="container-xxl">
            <div class="text-center">
                <h1 class="about-section-title">Browse All Journals</h1>
            </div>
            <div class="browse-all-journal-content">
                <div class="browse-all-journal-left">
                    <div class="browse-all-journal-left-heading">
                        <h5 class="refine-publication-by">Refine Publication By</h5>
                        <span>Research Area <i class="drop-icon fa-solid fa-chevron-down"></i></span>
                    </div>
                    <div class="browse-all-journal-left-publication-type-filter">
                        <h5>Publication Type</h5>
                        <div>
                            <label class="unique-checkbox">
                                <input type="checkbox">
                                <span class="checkmark">
                                    <span class="fill"></span>
                                </span>
                                <span class="publication-type-span-text">Research Article</span>
                            </label>
                        </div>
                        
                        <div>
                            <label class="unique-checkbox">
                                <input type="checkbox">
                                <span class="checkmark">
                                    <span class="fill"></span>
                                </span>
                                <span class="publication-type-span-text">Research Article</span>
                            </label>
                        </div>
                        
                    </div>
                    <div class="browse-all-journal-left-publication-type-filter">
                        <h5>Publication Status</h5>
                        <div>
                            <label class="unique-checkbox">
                                <input type="checkbox">
                                <span class="checkmark">
                                    <span class="fill"></span>
                                </span>
                                <span class="publication-type-span-text">Research Article</span>
                            </label>
                        </div>
                        <div>
                            <label class="unique-checkbox">
                                <input type="checkbox">
                                <span class="checkmark">
                                    <span class="fill"></span>
                                </span>
                                <span class="publication-type-span-text">Research Article</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="browse-all-journal-middle-content">
                    <div class="search-div">
                        <h5 class="search-heading">Search</h5>
                        <input type="text" placeholder="Search" class="search-input">
                        <span class="search-advanced">Are you looking for a specific article? <span class="use-advanced-search">Use Advanced Search</span></span>
                    </div>
                    <a href="{{ route('journalIndex') }}">
                        <div class="journal-list-div">
                            <p class="journal-category margin-bottom">Article </p>
                            <h5>Lorem ipiorupti voluptas aperiam dolore fafdgdfgdfgdfgdfcere aut obcaecati nam </h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempor velit deleniti iure doloremque! &nbsp; <span class="open-access">Open access</span></span>
                        </div>
                    </a>
                    
                    <a href="{{ route('journalIndex') }}">
                        <div class="journal-list-div">
                            <p class="journal-category margin-bottom">Artificial Intelligence</p>
                            <h5>Lorem ipiorupti voluptas aperidfgdfgdfgdfgdfam dolore facere aut obcaecati nam </h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempor velit deleniti iure doloremque!</span>
                        </div>
                    </a>
                    <a href="{{ route('journalIndex') }}">
                        <div class="journal-list-div">
                            <p class="journal-category margin-bottom">Machine Learning</p>
                            <h5>Lorem ipiorfdgdfgdfupti voluptas aperiam dfdgdfgdfgolore facere aut obcaecati nam </h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempor velit deleniti iure doloremque! &nbsp; <span class="open-access">open access</span></span>
                        </div>
                    </a >
                    <a href="{{ route('journalIndex') }}">
                        <div class="journal-list-div">
                            <p class="journal-category margin-bottom">Article</p>
                            <h5>Lorem ipiorupti voluptas aperiam dolore dfgdfgdfgdfgdffacere aut obcaecati nam </h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempor velit deleniti iure doloremque! &nbsp; <span class="open-access">open access</span></span>
                        </div>
                    </a>
                    <a href="{{ route('journalIndex') }}">
                        <div class="journal-list-div">
                            <p class="journal-category margin-bottom">Article</p>
                            <h5>Lorem ipdffdgdfggdfgdfiorupti voluptas aperiam dolore facere aut obcaecati nam </h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempor velit deleniti iure doloremque!</span>
                        </div>
                    </a>
                    
                </div>
                <div class="browse-all-journal-right">
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('frontend_custom_js')

@endsection
