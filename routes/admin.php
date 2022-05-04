<?php

Route::prefix('/admin')->group(function(){
    Route::get('/','App\Http\Controllers\Admin\DashboardController@getDashboard');
    Route::get('/users', 'App\Http\Controllers\Admin\UserController@getUsers');

    //module projects

    Route::get('/projects', 'App\Http\Controllers\Admin\ProjectController@getHome');
    Route::get('/project/add', 'App\Http\Controllers\Admin\ProjectController@getProjectAdd');

    //Business
    Route::get('/business', 'App\Http\Controllers\Admin\BusinessController@getHome');
    Route::post('/business/add', 'App\Http\Controllers\Admin\BusinessController@postBusinessAdd');
    Route::get('/business({id}/edit', 'App\Http\Controllers\Admin\BusinessController@getBusinessEdit');



});