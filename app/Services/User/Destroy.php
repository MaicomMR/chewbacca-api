<?php

namespace App\Services\User;

use Illuminate\Validation\UnauthorizedException;
use App\User;

class Destroy
{
    public function handle ($user): void
    {
        $user->delete();
    }
}