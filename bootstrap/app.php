<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\countryCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
       $middleware->appendToGroup(
            'check1',[
                AgeCheck::class,
                CountryCheck::class,
            ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
