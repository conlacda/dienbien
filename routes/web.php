<?php

Route::namespace('Guest')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::name('introduction.')->prefix('/gioi-thieu')->group(function () {
        Route::get('/', 'IntroductionController@index')->name('index');
        Route::get('/{slug}', 'IntroductionController@specific')->name('specific');
    });

    Route::name('children.')->prefix('/trẻ-em')->group(function () {
        Route::get('/', 'ChildrenController@index')->name('index');
        Route::prefix('/tổng-quan')->group(function () {
            Route::get('/', 'ChildrenController@index1')->name('index1');
            Route::get('/{slug}', 'ChildrenController@slug1')->name('slug1');
        });
        Route::prefix('/trẻ-em-đã-được-giúp-đỡ')->group(function () {
            Route::get('/', 'ChildrenController@index2')->name('index2');
            Route::get('/{slug}', 'ChildrenController@slug2')->name('slug2');
        });
        Route::prefix('/trẻ-em-cần-được-giúp-đỡ')->group(function () {
            Route::get('/', 'ChildrenController@index3')->name('index3');
            Route::get('/{slug}', 'ChildrenController@slug3')->name('slug3');
        });
        Route::prefix('/gương-sáng-trẻ-em')->group(function () {
            Route::get('/', 'ChildrenController@index4')->name('index4');
            Route::get('/{slug}', 'ChildrenController@slug4')->name('slug4');
        });
    });
    Route::name('activity.')->prefix('/hoạt-động')->group(function(){
       Route::get('/','ActivityController@index')->name('index');
       Route::get('/{slug}','ActivityController@slug')->name('slug');
    });
    Route::name('sponsor.')->prefix('/nhà-tài-trợ')->group(function(){
       Route::get('/','SponsorController@index')->name('index');
       Route::get('/{slug}','SponsorController@slug')->name('slug');
    });

    Route::name('newspost.')->prefix('/tin-tức')->group(function(){
       Route::get('/','NewsPostController@index')->name('index');
       Route::get('/slug','NewsPostController@slug')->name('slug');
    });

    Route::name('gallery.')->prefix('/thu-vien-anh')->group(function(){
       Route::get('/','GalleryController@index')->name('index');

    });
});

// TODO middleware role (tech fest)
Route::namespace('Admin')->prefix('/admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/','AdminController@index')->name('index');
    Route::resource('introductions','IntroductionController');
    Route::resource('children1s','Children1Controller');
    Route::resource('children2s','Children2Controller');
    Route::resource('children3s','Children3Controller');
    Route::resource('children4s','Children4Controller');
    Route::resource('activities','ActivityController');
    Route::resource('contacts','ContactController');
    Route::resource('sponsors','SponsorController');
    Route::resource('news','NewsPostController');
    Route::resource('galleries','GalleryController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
