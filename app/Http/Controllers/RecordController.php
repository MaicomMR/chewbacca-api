<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Record\RecordUser;
use App\User;


class RecordController extends Controller
{
    public function getReportsAndViolencesOffUser(User $user, RecordUser $recordUser)
    {
        $response = $recordUser->sendData($user);

        return $response;
    }    
}
