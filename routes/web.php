<?php

// BACKEND
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/konfirmasi/upload/{id}', 'BookingController@konfirmasi');
    Route::put('/konfirmasi/save/{id}', 'BookingController@saveKonfirmasi');
    Route::group(['prefix' => 'admin'], function () {
      Route::get('/report', 'LaporanController@index');
      Route::get('/print', 'LaporanController@print');
      Route::get('/report/paket', 'LaporanController@paket');
      Route::get('/konfirmasi', 'BookingController@indexKonfirmasi');


      Route::get('/user', 'UserController@index');
      Route::get('/user/create', 'UserController@create');
      Route::post('/user/save', 'UserController@save');
      Route::get('/user/{id}/edit', 'UserController@edit');
      Route::put('/user/update/{id}', 'UserController@update');
      Route::get('/user/{id}/delete', 'UserController@delete');


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

      Route::group(['prefix' => 'booking'], function () {
        Route::get('/', 'BookingController@indexAdmin');
        Route::get('/create', 'BookingController@createAdmin');
        Route::get('/approve', 'BookingController@indexApprove');
        Route::get('/decline', 'BookingController@indexDecline');
        Route::post('/save', 'BookingController@saveAdmin');
        Route::get('/{id}/edit', 'BookingController@editAdmin');
        Route::put('/update/{id}', 'BookingController@updateAdmin');
        Route::get('/{id}/delete', 'BookingController@deleteAdmin');
        Route::get('/{id}/view', 'BookingController@viewAdmin');
        Route::get('/{id}/approve', 'BookingController@approve');
        Route::get('/{id}/decline', 'BookingController@decline');
      });


    });
  });
});



// FRONTEND
Route::get('/', 'HomeController@index');
Route::get('/setting', 'HomeController@view');
Route::post('/setting/change/{id}', 'HomeController@change');
Route::get('/post/detail/{id}', 'PackageController@view');
Route::get('/book/{id}', 'BookingController@index');
Route::post('/book/save', 'BookingController@save')->name('saveBooking');
