<?php

namespace App\Services\Audit;

use Illuminate\Support\Facades\Log;

class LogService
{
    public static function error(string $message, $data = null)
    {
        Log::error($message, $data);
    }


    public static function info(string $message, $data = null)
    {
        Log::info($message, $data);
    }
}
