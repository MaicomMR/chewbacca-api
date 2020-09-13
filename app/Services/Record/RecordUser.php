<?php

namespace App\Services\Record;

use Illuminate\Validation\UnauthorizedException;
use App\User;
use App\Violence;
use App\Report;

class RecordUser
{
    public function __construct(User $user, Violence $violence, Report $report)
	{
		$this->user = $user;
        $this->violence = $violence;
        $this->report = $report;
    }

    public function sendData(User $user)
    {
        return response()->json([
            'data' => [
                'nameUser' => $user->name,
                'emailUser' => $user->email,
                'neighborhoodUser' => $user->neighborhood,
                'totalReports' => $this->user->getTotalReports($user->id),
                'listViolences' => $this->violence->getViolencesAndNumberOffReports($user->id)
            ],
        ], 202);




    }
}
