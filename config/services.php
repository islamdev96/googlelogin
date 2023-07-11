<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
                'google' => [
                    'client_id' => env('764459651882-bhu3dn3d6cahor7m5mrrmqelcr413lbl.apps.googleusercontent.com'),
                    'client_secret' => env('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'),
                'redirect' => env('http://127.0.0.1:8000/auth/google/callback'),

    ],


        'linkedin' => [
            'client_id' => '77w5ho9ykud17k',
            'client_secret' => 'jNi6gcS3MknTPNbz',
            'redirect' => 'http://127.0.0.1:8000/auth/linkedin/callback',
        ],


];
