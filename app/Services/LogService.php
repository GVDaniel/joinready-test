<?php

namespace App\Services;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class LogService{

    public function __construct(){

    }

    public function saveLog($info) {
        $data = [
            'date' => Carbon::now()->format('y-m-d H:i:s A'),
            'info' => $info
        ];
        Log::debug(json_encode($data));
    }
}