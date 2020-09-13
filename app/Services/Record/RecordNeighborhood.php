<?php

namespace App\Services\Record;

use Illuminate\Validation\UnauthorizedException;
use App\User;
use App\Violence;


class RecordNeighborhood
{
    public function __construct(Violence $violence)
	{
        $this->violence = $violence;
    }

    public function sendData(User $user)
    {
        return response()->json([
            'data' => [
                'userList' => $this->violence->getUsersByNeighborhood($user->neighborhood)
            ],
        ], 202);
    }
}
