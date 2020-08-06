<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * A 404 not found JSON response.
     *
     * @param string $message
     */
    public function notFound($message = 'Resource not found')
    {
        return json([
            'message' => $message
        ], 404);
    }

    /**
     * A 200 deleted JSON response.
     *
     * @param string $message
     */
    public function deleted($message = 'Deleted')
    {
        return json([
            'message' => $message
        ], 200);
    }
}