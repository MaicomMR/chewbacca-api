<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Dashboard\SendData;

class DashboardController extends Controller
{
    public function index(SendData $sendDataService){

        $response = $sendDataService->sendData();

        return $response;
    }
}
