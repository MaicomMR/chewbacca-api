<?php

namespace App\Services\Violence;

use Illuminate\Validation\UnauthorizedException;
use App\Violence;

class Destroy
{
    public function handle ($violence): void
    {
        $violence->delete();
    }
}