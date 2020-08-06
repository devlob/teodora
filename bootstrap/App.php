<?php

namespace App\Bootstrap;

use Exception;

class App
{
    /**
     * Store registries.
     *
     * @var array
     */
    protected static $registry = [];

    /**
     * Bind a service.
     *
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * Get a service
     *
     * @param $key
     *
     * @return mixed
     * @throws Exception
     */
    public static function get($key)
    {
        if ( ! array_key_exists($key, static::$registry)) {
            throw new Exception("No $key available.");
        }

        return static::$registry[$key];
    }
}