<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Response
{
    public static function success($data = null)
    {
        return [
            'success' => true,
            'data' => $data,
        ];
    }

    public static function error($message, $detailed_error = null)
    {
        return [
            'success' => false,
            'message' => $message,
            'detailed_error' => $detailed_error,
        ];
    }
}
