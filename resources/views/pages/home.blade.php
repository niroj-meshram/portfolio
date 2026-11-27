@extends('layouts.app')

{{-- Title ≤ 60 characters so search results don't truncate it; the stack keywords live in the description. --}}
@section('title', 'Niroj Meshram · Backend-focused Full-Stack Engineer')
@section('description', 'Backend-focused full-stack engineer: 5+ years in PHP and Laravel, plus React, TypeScript, MySQL and AWS. Open to full-time remote roles and contract work.')

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
