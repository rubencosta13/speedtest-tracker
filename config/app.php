<?php

return [

    'name' => env('APP_NAME', 'Speedtest Tracker'),

    'env' => env('APP_ENV', 'production'),

    'chart_begin_at_zero' => env('CHART_BEGIN_AT_ZERO', true),

    'chart_datetime_format' => env('CHART_DATETIME_FORMAT', 'M. j - G:i'),

    'datetime_format' => env('DATETIME_FORMAT', 'M. jS, Y g:ia'),

    'display_timezone' => env('DISPLAY_TIMEZONE', 'UTC'),

    'force_https' => env('FORCE_HTTPS', false),

];
