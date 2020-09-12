<?php

namespace App\Services\User;

use Illuminate\Validation\UnauthorizedException;
use Illuminate\Support\Str;
use App\User;

class Store
{
    public function handle ($request): User
    {
        $user = User::create([
            'email'    => request()->email,
            'password' => Hash::make(request()->password),
            'name' => request()->name,
            'phone' => request()->phone,
            'address' => request()->address,
            'neighborhood' => request()->neighborhood,
        ]);

        $user->assignRole('school');

        return $user;
    }
}