<?php

namespace App\Services\Violence;

use Illuminate\Validation\UnauthorizedException;

class Update
{
    public function handle ($request, $violence): void
    {
       $violence->update($request->all());
    }
}