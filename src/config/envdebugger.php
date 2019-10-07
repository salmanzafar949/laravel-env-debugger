<?php

/**
 * This file contains configuration for laravel-env-debugger
 * Make changes according to your need
*/

return [

    'app' => [

        env('APP_NAME'),
        env('APP_ENV'),
        env('APP_KEY'),
        env('APP_DEBUG'),
        env('APP_URL'),
    ],

    'log' => [

        env('LOG_CHANNEL')
    ],

    'db' => [

        env('DB_CONNECTION'),
        env('DB_HOST'),
        env('DB_PORT'),
        env('DB_DATABASE'),
        env('DB_USERNAME'),
        env('DB_PASSWORD'),
    ],

    'broadcast' => [

        env('BROADCAST_DRIVER'),
    ],

    'cache' => [

        env('CACHE_DRIVER'),
    ],

    'queue' => [

        env('QUEUE_CONNECTION'),
    ],

    'session' => [

        env('SESSION_DRIVER'),
        env('SESSION_LIFETIME'),
    ],

    'redis' => [

        env('REDIS_HOST'),
        env('REDIS_PASSWORD'),
        env('REDIS_PORT'),
    ],

    'mail' => [

        env('MAIL_DRIVER'),
        env('MAIL_HOST'),
        env('MAIL_PORT'),
        env('MAIL_USERNAME'),
        env('MAIL_PASSWORD'),
        env('MAIL_ENCRYPTION'),
    ],

    'aws' => [

        env('AWS_ACCESS_KEY_ID'),
        env('AWS_SECRET_ACCESS_KEY'),
        env('AWS_DEFAULT_REGION'),
        env('AWS_BUCKET'),
    ],

    'pusher' => [

        env('PUSHER_APP_ID'),
        env('PUSHER_APP_KEY'),
        env('PUSHER_APP_SECRET'),
        env('PUSHER_APP_CLUSTER'),
        env('MIX_PUSHER_APP_KEY'),
        env('MIX_PUSHER_APP_CLUSTER'),
    ],

    's3' => [
        env('S3_BUCKET'),
        env('S3_REGION'),
        env('S3_SECRET'),
        env('S3_KEY'),
    ],

    'others' => [], // Here yo can defined your custom env variables for debugging


];
