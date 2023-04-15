<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Admin\Controllers',
    'middleware' => 'web',
], function() {
    Route::group([
        'middleware' => ['auth', 'cms.verified']
    ], function () {
        Route::get('/cms', 'AdminController@index')->name('home.index');
    });
});
