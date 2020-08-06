<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Devlob\Request\Request;

class LoginController extends Controller
{
    /**
     * Login and return JWT token.
     *
     * @param Request $request
     *
     * @return bool|mixed
     */
    public function login(Request $request)
    {
        $validate = $request->validate([
            'email'    => 'email',
            'password' => 'required'
        ]);

        if ($validate !== true) {
            return $validate;
        }

        if ($user = User::where('email', '=', $request->email)[0]) {
            if (password_verify($request->password, $user->password)) {
                return json([
                    'token' => $user->token()
                ]);
            } else {
                return json([
                    'message' => 'Wrong credentials'
                ], 403);
            }
        }

        return $this->notFound();
    }
}