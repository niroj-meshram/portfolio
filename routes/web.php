<?php

use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

// The portfolio is a static page with no forms, so it needs no session: no cookies are set, no session
// row is written to the database on every visit, and browsers/proxies may cache the HTML briefly.
// The short max-age limits how long a stale page can point at old build assets after a deploy.
Route::view('/', 'pages.home')
    ->withoutMiddleware([
        EncryptCookies::class,
        AddQueuedCookiesToResponse::class,
        StartSession::class,
        ShareErrorsFromSession::class,
        ValidateCsrfToken::class,
    ])
    ->middleware('cache.headers:public;max_age=300;etag');
