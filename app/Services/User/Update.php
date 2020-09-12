<?php

namespace App\Services\User;

use Illuminate\Validation\UnauthorizedException;

class Update
{
    public function handle ($request, $user): void
    {
       $user->update($request->all());
    }
}