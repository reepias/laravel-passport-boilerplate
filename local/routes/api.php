<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->group(function () {
    
    Route::get('/user', 'UserController@show');

});