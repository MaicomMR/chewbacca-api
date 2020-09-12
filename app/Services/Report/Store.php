<?php

namespace App\Services\Report;

use Illuminate\Validation\UnauthorizedException;
use App\Report;

class Store
{
    public function handle ($request): Report
    {
        $report = Report::create([
            'description' => request()->description,
            'date' => request()->date,
            'user_id' => request()->user_id,
        ]);


        return $report;
    }
}