<?php

return [
    /*
    |--------------------------------------------------------------------------
    | API Address
    |--------------------------------------------------------------------------
    |
    | To make a request to the API, you must send a POST request with the
    | appropriate parameters to the specified address.
    |
    */

    'base_url' => env('ADM_TOOLS_BASE_URL', 'https://adm.tools/api.php'),

    /*
    |--------------------------------------------------------------------------
    | User Account Login
    |--------------------------------------------------------------------------
    |
    | User account login, required parameter.
    |
    */

    'auth_login' => env('ADM_TOOLS_AUTH_LOGIN', ''),

    /*
    |--------------------------------------------------------------------------
    | API Access Token
    |--------------------------------------------------------------------------
    |
    | A special access token API, which can be obtained in the section of access control.
    | Required.
    |
    */

    'auth_token' => env('ADM_TOOLS_AUTH_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | Response Format
    |--------------------------------------------------------------------------
    |
    | The format of the response to the request can take the values of json or xml.
    | An optional parameter, by default, is set to json.
    |
    */

    'format' => env('ADM_TOOLS_FORMAT', 'json'),
];
