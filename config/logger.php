<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Loggers
    |--------------------------------------------------------------------------
    |
    | Here are each of the loggers to call under the hood while logging.
    |
    */

    'loggers' => env('APP_DEBUG', false) ? ['Illuminate\Log\Writer' => ['*']] : [
        'AltThree\Bugsnag\Logger' => ['error', 'critical', 'alert', 'emergency'],
    ],

];
