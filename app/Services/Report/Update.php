<?php

namespace App\Services\Report;

use Illuminate\Validation\UnauthorizedException;

class Update
{
    public function handle ($request, $report): void
    {
       $report->update($request->all());
    }
}