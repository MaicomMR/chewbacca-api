<?php

namespace App\Services\Record;

use Illuminate\Validation\UnauthorizedException;
use App\Report;
use App\User;

class RecordReport
{
    public function __construct(Report $report)
	{
        $this->report = $report;
    }

    public function sendData(User $user)
    {
        return response()->json([
            'data' => [
                'reportList' => $this->report->getAllReportsByUser($user->id)
            ],
        ], 202);
    }
}
