<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Spatie\RouteAttributes\Attributes\Get;

class WelcomeController
{
    #[Get('/')]
    public function __invoke()
    {
        return Inertia::render('Welcome', [
            'canLogin'       => Route::has('login'),
            'canRegister'    => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion'     => PHP_VERSION,
        ]);
    }
}
