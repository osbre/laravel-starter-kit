<?php

namespace App\Http\Controllers\API;

use Spatie\RouteAttributes\Attributes\Get;

class HelloWorldController
{
    #[Get('/hello-world')]
    public function __invoke()
    {
        return response()->json(['message' => 'Hello, World!']);
    }
}
