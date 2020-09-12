<?php

namespace App\Services\Report;

use Illuminate\Validation\UnauthorizedException;
use App\Report;

class Store
{
    public function handle ($request, array $violences): Report
    {
        $report = Report::create([
            'description' => request()->description,
            'date' => request()->date,
            'user_id' => auth()->id(),
        ]);

        $report->violences()->sync($violences);

        return $report;
    }
}