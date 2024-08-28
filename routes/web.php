<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $cacheKey = 'home-page';

    if (Cache::has($cacheKey)) {
        return Cache::get($cacheKey);
    }

    $response = view('index')->render();

    Cache::put($cacheKey, $response, 60);

    return response($response);
});
