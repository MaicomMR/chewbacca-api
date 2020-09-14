<?php

namespace App\Services\Record;

use Illuminate\Validation\UnauthorizedException;
use App\Violence;

class RecordViolence
{
    public function __construct(Violence $violence)
	{
        $this->violence = $violence;
    }

    public function sendData(Violence $violence)
    {
        return response()->json([
            'data' => [
                'violenceList' => $this->violence->getViolencesByUser($violence->id)
            ],
        ], 202);
    }
}
