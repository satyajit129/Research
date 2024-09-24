@extends('frontend.global.frontend_master')
@section('title', 'Journals')
@section('frontend_custom_stylesheet')
<style>

</style>
@endsection

@section('frontend_content')
<main>
    @include('frontend.pages.journal.includes.view-article-hero')
    @include('frontend.pages.journal.includes.paper-details')
</main>
@endsection

@section('frontend_custom_js')
    <script>
        $(document).ready(function() {
            $('.toggle').on('click', function() {
                let subList = $(this).next('.sub-section-list');
                subList.slideToggle();
            });
        });
    </script>
@endsection
