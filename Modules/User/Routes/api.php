<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->name('api::')->group(function () {
    Route::apiResource('users', UserApiController::class);
});
