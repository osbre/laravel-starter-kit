<?php

namespace App\Http\Controllers\Dashboard;


use Inertia\Inertia;
use Spatie\RouteAttributes\Attributes\Get;

class DashboardController
{
    #[Get('/dashboard', 'dashboard')]
    public function __invoke()
    {
        return Inertia::render('Dashboard');
    }
}
