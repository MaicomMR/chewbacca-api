<?php

namespace App\Services\Dashboard;

use Illuminate\Validation\UnauthorizedException;
use App\User;
use App\Violence;
use App\Report;

class SendData
{
    public function __construct(Report $report, User $user, Violence $violence)
	{
		$this->user = $user;
        $this->violence = $violence;
        $this->report = $report;
    }

    public function sendData()
    {
        return response()->json([
            'data' => [
                'numberAllReports' => $this->report->numberAllReports(),
                'userWithMoreReports' => $this->user->userWithMoreReports(),
                'neighborhoodWithMoreReports' => $this->user->neighborhoodWithMoreReports(),
                'violenceMoreRelated' => $this->violence->violenceMoreRelated(),
                'top5UsersWithMoreReports' => $this->user->top5UsersWithMoreReports(),
            ],
        ], 202);
    }
}
