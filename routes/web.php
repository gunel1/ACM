<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('/','PageController@index');
//
//Route::get('/home', function () {
//    return view('index');
//});

Route::get('/403', function () {
    return view('errors.403');
});
Route::get('/stories',function (){
    return view('storys');
});

Route::get('/momsblog',function (){
    return view('momsblog');
});

Route::get('/momscan',function (){
    return view('momscan');
}
);


Route::get('/album/{id}', 'PageController@getImages');

    Route::group(['prefix' => 'adminpanel'], function () {
    Route::get('/', 'AdminController@index');

    Route::resource('history','HistoryController');

    Route::resource('achievement','AchievementController');

    Route::resource('expert','ExpertController');

    Route::resource('galery', 'GalleryController');
    Route::delete('galery/image/{id}', 'GalleryController@deleteImage');
    Route::post('galery/image', 'GalleryController@storeImage');

    Route::delete('video/{id}', 'GalleryController@deleteVideo');
    Route::get('video', 'GalleryController@showVideo');
    Route::post('video', 'GalleryController@storeVideo');
    Route::get('video/edit/{id}', 'GalleryController@createVideo');

    Route::get('/info', 'AdminController@getUserInfo');
    Route::get('/info/edit', 'AdminController@editUserInfo');
    Route::post('/info/store', 'AdminController@storeUserInfo');

//    Route::resource('dropdowns', 'DropdownController');
//    Route::resource('specifications', 'SpecificationController');
//    Route::resource('categories', 'CategoryController');
//    Route::post('/dropdownValues/update', 'DropdownController@updateDropdownValue');
});
Auth::routes();
});