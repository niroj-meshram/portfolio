@extends('layouts.app')

@section('title', 'Niroj Meshram: Full Stack Developer · Backend-focused (PHP, Laravel, AWS)')
@section('description', 'Backend-focused Full Stack Developer with 5+ years in PHP and Laravel and hands-on AWS production support. Open to full-time remote and freelance roles.')

@section('content')
    {{-- Section order must match the `sections` array in resources/js/app.js (navbar active-state tracking)
         and the nav lists in partials/navbar.blade.php and partials/footer.blade.php. --}}
    @include('sections.hero')
    @include('sections.experience')
    @include('sections.case-study')
    @include('sections.skills')
    @include('sections.projects')
    @include('sections.about')
    @include('sections.contact')
@endsection
