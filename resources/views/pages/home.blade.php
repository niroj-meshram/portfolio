@extends('layouts.app')

{{-- Title ≤ 60 characters so search results don't truncate it; the stack keywords live in the description. --}}
@section('title', 'Niroj Meshram · Full Stack Developer · Backend-focused')
@section('description', 'Backend-focused Full Stack Developer: 5+ years in PHP and Laravel, plus React, TypeScript and AWS production support. Open to remote and freelance roles.')

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
