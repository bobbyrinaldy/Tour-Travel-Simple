<?php

// BACKEND
Auth::routes();

Route::group(['middleware' => 'admin'], function () {
  Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');

    Route::group(['prefix' => 'paket'], function () {
      // Paket

      Route::get('/', 'PackageController@index');
      Route::get('/create', 'PackageController@create');
      Route::post('/save', 'PackageController@save');
      Route::get('/{id}/edit', 'PackageController@edit');
      Route::put('/update/{id}', 'PackageController@update');
      Route::get('/{id}/delete', 'PackageController@delete');


      // Aktivitas Paket
      Route::get('/aktivitas/{id}', 'ActivitiesController@index');
      Route::get('/aktivitas/{id}/create', 'ActivitiesController@create');
      Route::post('/aktivitas/save', 'ActivitiesController@save');
      Route::get('/aktivitas/{id_paket}/{id_aktivitas}/edit', 'ActivitiesController@edit');
      Route::put('/aktivitas/{id}/update', 'ActivitiesController@update');
      Route::get('/aktivitas/{id_paket}/{id_aktivitas}/delete', 'ActivitiesController@delete');

      // Hotel Paket
      Route::get('/hotel/{id}', 'HotelController@index');
      Route::get('/hotel/{id}/create', 'HotelController@create');
      Route::post('/hotel/save', 'HotelController@save');
      Route::get('/hotel/{id_paket}/{id_hotel}/edit', 'HotelController@edit');
      Route::put('/hotel/{id}/update', 'HotelController@update');
      Route::get('/hotel/{id_paket}/{id_hotel}/delete', 'HotelController@delete');

    });


  });
});

// FRONTEND
Route::get('/', 'HomeController@index');
Route::get('/post/detail/{id}', 'PackageController@view');
