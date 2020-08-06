<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', ['name' => env('APP_NAME')]);
    }
}