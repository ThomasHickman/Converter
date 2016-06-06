<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | This api key points the bugsnag notifier to the project in your account.
    |
    */

    'key' => env('BUGSNAG_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | User Logging
    |--------------------------------------------------------------------------
    |
    | This lets us know if we should attempt to log the current user.
    |
    */

    'user' => false,

];
