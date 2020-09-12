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
            'phone' => request()->phone,
            'address' => request()->address,
            'neighborhood' => request()->neighborhood,
        ]);

        $user->assignRole('school');

        $token = auth('api')->login($user);

        return [
            'access_token' => $token,
            'token_type'    => 'bearer',
            'expires_in'    => auth('api')->factory()->getTTL() * 60,
        ];
    }
}
