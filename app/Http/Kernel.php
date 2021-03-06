<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],
        'medicalcompany' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],
        'api' => [
            'throttle:60,1',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'patient' =>\App\Http\Middleware\PatientMiddleware::class,
        'physician'=>\App\Http\Middleware\PhysicianMiddleware::class,
        'assistant'=>\App\Http\Middleware\AssistantMiddleware::class,
        'role' => \Laraveldaily\Quickadmin\Middleware\HasPermissions::class,
        'reservation'=>\App\Http\Middleware\ReservationMiddleware::class,
        'questionowneredit'=>\App\Http\Middleware\questionowneredit::class,
        'questionownerdestroy'=>\App\Http\Middleware\questionownerdestroy::class,
        'answerowner'=>\App\Http\Middleware\answerowner::class,
        'adviceeditdestroy'=>\App\Http\Middleware\adviceeditdestroy::class,
        'askquestion'=>\App\Http\Middleware\askquestion::class,
    ];
}
