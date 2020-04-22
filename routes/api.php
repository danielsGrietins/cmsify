<?php

Route::group(['prefix' => 'api/admin'], function () {
    Route::post('login', '\Cmsify\Cmsify\Http\Controllers\LoginController@login');

    Route::group(['middleware' => 'admin-auth'], function () {
        Route::post('refresh-token', '\Cmsify\Cmsify\Http\Controllers\LoginController@refresh');
        Route::post('logout', '\Cmsify\Cmsify\Http\Controllers\LoginController@logout');

        Route::get('resource-routes', '\Cmsify\Cmsify\Http\Controllers\ResourceController@index');
    });
});

