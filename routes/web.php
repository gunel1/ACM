<?php
Route::group(['middleware' => ['web']], function () {
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
Route::get('/','PageController@index');
Route::get('/stories', 'PageController@getStories');
Route::post('/contact', 'PageController@sendEmail');
Route::get('/momsblog','PageController@getMomsBlog');
Route::get('/momscan','PageController@getMomsCan');
Route::get('/album/{id}', 'PageController@getImages');
    Route::group(['prefix' => 'adminpanel'], function () {
    Route::get('/', 'AdminController@index');
    Route::resource('history','HistoryController');
    Route::resource('achievement','AchievementController');
    Route::resource('expert','ExpertController');
    Route::resource('event','EventController');
    Route::resource('story','StoryController');
    Route::resource('blog','BlogController');
    Route::resource('library','LibraryController');
    Route::resource('project','ProjectController');
    Route::resource('momscan','MomsCanController');
    Route::resource('team','TeamController');
    Route::resource('massmedia','MassmediaController');
    Route::get('contact', 'AdminController@getContact');
    Route::delete('contact/delete', 'AdminController@deleteAll');
    Route::resource('galery', 'GalleryController');
    Route::delete('galery/image', 'GalleryController@deleteImage');
    Route::post('galery/image', 'GalleryController@storeImage');
    Route::delete('video/{id}', 'GalleryController@deleteVideo');
    Route::get('video', 'GalleryController@showVideo');
    Route::post('video', 'GalleryController@storeVideo');
    Route::get('video/edit/{id}', 'GalleryController@createVideo');
    Route::get('/info', 'AdminController@getUserInfo');
    Route::get('/info/edit', 'AdminController@editUserInfo');
    Route::post('/info/store', 'AdminController@storeUserInfo');
});Auth::routes();});