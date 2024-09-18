@extends('frontend.global.frontend_master')

@section('frontend_custom_stylesheet')
@endsection

@section('frontend_content')
<main>
    @include('frontend.pages.journal.includes.journal-overview')
    @include('frontend.pages.journal.includes.about-this-journal')
    @include('frontend.pages.journal.includes.latest-journal')
    @include('frontend.pages.journal.includes.editorial-board')
    @include('frontend.pages.journal.includes.subscribe-section')
</main>
@endsection

@section('frontend_custom_js')

@endsection
    
