<?php

namespace App\Http;

use Devlob\Http\HttpKernel;
use Devlob\Http\Middlewares\Api;
use Devlob\Http\Middlewares\CheckForMaintenance;
use Devlob\Http\Middlewares\PresentSecretKey;

class Kernel extends HttpKernel
{
    /**
     * Stores global middlewares.
     *
     * @var array
     */
    protected $globalMiddlewares
        = [
            CheckForMaintenance::class,
            PresentSecretKey::class
        ];

    /**
     * Stores route middlewares.
     *
     * @var array
     */
    protected $routeMiddlewares
        = [
            'api' => Api::class
        ];
}