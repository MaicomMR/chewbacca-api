<?php

namespace App\Services\Auth;

use App\User;
use Flugg\Responder\Exceptions\Http\UnauthorizedException;

class Register
{
    public function handle ($credentials)
    {
        $user = User::create([
            'email'    => request()->email,
            'password' => request()->password,
            'name' => request()->name,
            'admin_level' => request()->admin_level,
            'phone' => request()->phone,
            'address' => request()->address,
            'neighborhood' => request()->neighborhood,
        ]);

        $token = auth('api')->login($user);

        return [
            'access_token' => $token,
            'token_type'    => 'bearer',
            'expires_in'    => auth('api')->factory()->getTTL() * 60,
        ];
    }
}
