<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Record\RecordUser;
use App\Services\Record\RecordViolence;
use App\Services\Record\RecordNeighborhood;
use App\User;
use App\Violence;

class RecordController extends Controller
{
    public function getReportsAndViolencesOffUser(User $user, RecordUser $recordUser)
    {
        $response = $recordUser->sendData($user);

        return $response;
    }    

    public function getUsersByViolence(Violence $violence, RecordViolence $recordViolence)
    {
        $response = $recordViolence->sendData($violence);

        return $response;
    }    

    public function getUsersByNeighborhood(User $user, RecordNeighborhood $recordNeighborhood)
    {
        $response = $recordNeighborhood->sendData($user);

        return $response;
    }
}
