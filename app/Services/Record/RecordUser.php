<?php

namespace App\Services\Record;

use Illuminate\Validation\UnauthorizedException;
use App\User;
use App\Violence;

class RecordUser
{
    public function __construct(User $user, Violence $violence)
	{
		$this->user = $user;
        $this->violence = $violence;
    }

    public function sendData(User $user)
    {
        return response()->json([
            'data' => [
                'nameUser' => $user->name,
                'emailUser' => $user->email,
                'neighborhoodUser' => $user->neighborhood,
                'totalReports' => $this->user->getTotalReports($user->id),
                'violenceList' => $this->violence->getViolencesAndNumberOffReports($user->id),
                'dateOffLastReport' =>$this->user->getDateOffLastReport($user->id)
            ],
        ], 202);
    }
}
