@extends('frontend.global.frontend_master')
@section('title', 'Journals')
@section('frontend_custom_stylesheet')

@endsection

@section('frontend_content')
<main>
    @include('frontend.pages.journal.includes.editorial-board-hero')
    @include('frontend.pages.journal.includes.editorial-board-members')
</main>
@endsection

@section('frontend_custom_js')

@endsection
