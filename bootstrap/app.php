<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'throttle' => \App\Http\Middleware\ThrottleRequests::class,
        ]);
        
        // Add API exception handler middleware
        $middleware->append(\App\Http\Middleware\ApiExceptionHandler::class);
        
        // Add maintenance mode check middleware
        $middleware->append(\App\Http\Middleware\CheckForMaintenanceMode::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();