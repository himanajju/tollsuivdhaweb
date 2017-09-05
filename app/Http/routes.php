<?php

Route::get('/','auth@login')->middleware('RedirectIfLoggedIn');
Route::post('/auth','auth@auth');
Route::get('logout','auth@logout');

Route::get('/add-user', 'DefaultController@adduser')->middleware('SessionCheck');
Route::get('/dashboard', 'DefaultController@dashboard')->middleware('SessionCheck');
Route::get('/add-vehicle', 'DefaultController@addvehicle')->middleware('SessionCheck');
Route::get('/add-vip', 'DefaultController@addvip')->middleware('SessionCheck');
Route::post('/add-vip', 'DefaultController@setvip')->middleware('SessionCheck');
Route::post('/add-user', 'DefaultController@setuser')->middleware('SessionCheck');
Route::post('/get-vehicle-details', 'DefaultController@getVehicleDetails')->middleware('SessionCheck');
Route::post('/toll-payment', 'DefaultController@tollpayment')->middleware('SessionCheck');
Route::get('/block-user', 'DefaultController@blockUser')->middleware('SessionCheck');
Route::get('/do-block-user/{email}', 'DefaultController@setblockUser')->middleware('SessionCheck');

Route::get('/add-suspected-vehicle', 'DefaultController@suspectedVehicle')->middleware('SessionCheck');
//Route::post('/add-suspected-vehicle', 'DefaultController@addSuspectedVehicle')->middleware('SessionCheck');
