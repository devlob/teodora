<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Devlob\Request\Request;
use Exception;

class RegisterController extends Controller
{
    /**
     *
     *
     * @param Request $request
     *
     * @return mixed
     * @throws Exception
     */
    public function register(Request $request)
    {
        $validate = $request->validate([
            'name'     => 'required',
            'email'    => 'email',
            'password' => 'required'
        ]);

        if ($validate !== true) {
            return $validate;
        }

        return User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT)
        ]);
    }
}