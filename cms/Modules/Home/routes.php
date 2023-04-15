<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Home\Controllers',
    'middleware' => 'web',
], function() {
        Route::get('/', 'HomeController@home')->name('web.index');
        Route::get('/about-us', 'HomeController@aboutUs')->name('web.aboutUs');
        Route::get('/blog-post', 'HomeController@blogPost')->name('web.blogPost');
        Route::get('/blog', 'HomeController@blog')->name('web.blog');
        Route::get('/clients', 'HomeController@clients')->name('web.clients');
        Route::get('/contact', 'HomeController@contact')->name('web.contact');
        Route::get('/cost-calculation', 'HomeController@costCalculation')->name('web.costCalculation');
        Route::get('/cost-calculation-result', 'HomeController@costCalculationResult')->name('web.costCalculationResult');
        Route::get('/individual-member', 'HomeController@individualMember')->name('web.individualMember');
        Route::get('/our-team', 'HomeController@ourTeam')->name('web.ourTeam');
        Route::get('/our-work', 'HomeController@ourWork')->name('web.ourWork');
});
