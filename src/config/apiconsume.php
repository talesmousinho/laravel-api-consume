<?php

return [

    /*
    |--------------------------------------------------------------------------
    | ApiConsume Defaults
    |--------------------------------------------------------------------------
    |
    | Configure client constructor parameters.
    | See: http://docs.guzzlephp.org/en/stable/quickstart.html#creating-a-client
    |
    */

    'defaults' => [

        /**
         * Base URI is used with relative requests
         *   When a relative URI is provided to a client, the client will
         *   combine the base URI with the relative URI using the rules
         *   described in RFC 3986, section 2
         *   See http://tools.ietf.org/html/rfc3986#section-5.2
         */
        'base_uri' => env('APICONSUME_BASE_URI', 'http://localhost/api/v1/'),

        /**
         * (float) The timeout of the request in seconds.
         * Use 0 to wait indefinitely (default).
         */
        // 'timeout' => 2.0,

        /**
         * (callable) Function that transfers HTTP requests over the wire.
         * See: http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html
         */
        //'handler' => null,

    ],

    /*
    |--------------------------------------------------------------------------
    | Merge Params
    |--------------------------------------------------------------------------
    |
    | Merge request options params on request
    | See: http://docs.guzzlephp.org/en/stable/request-options.html
    |
    */

    'merge' => [
    ],

    /*
    |--------------------------------------------------------------------------
    | Api Endpoints
    |--------------------------------------------------------------------------
    |
    | (array) Define your aliases for Api Endpoints.
    | For options params see: http://docs.guzzlephp.org/en/stable/request-options.html
    |
    | Sample array:
    |   'endpoints' => [
    |       'login' => [
    |           'uri' => 'user/login',
    |           'options' => [
    |               'query' => [
    |                   'foo' => 'bar',
    |               ],
    |           ],
    |       ],
    |   ],
    |
    */

    'endpoints' => [
    ],

];
