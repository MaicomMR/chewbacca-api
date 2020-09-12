<?php

namespace App\Services\Report;

use Illuminate\Validation\UnauthorizedException;
use App\Report;

class Destroy
{
    public function handle ($report): void
    {
        $report->delete();
    }
}