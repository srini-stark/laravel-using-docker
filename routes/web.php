<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-redis', function () {
    // Store a value in Redis
    Redis::set('docker_test', 'Redis is working perfectly inside Docker!')

    // Retrieve the value from Redis
    return Redis::get('docker_test');
});