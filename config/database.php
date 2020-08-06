<?php

return [
    /**
     * Database connection.
     */
    'Database' => [
        'connection' => env('DB_CONNECTION'),
        'db'         => env('DB_DATABASE'),
        'host'       => env('DB_HOST'),
        'port'       => env('DB_PORT'),
        'user'       => env('DB_USER'),
        'password'   => env('DB_PASSWORD'),
        'charset'    => 'utf8'
    ]
];