<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'Page\HomeController@home', 'as' => 'home']);
Route::get('review', ['uses' => 'Page\ReviewController@review', 'as' => 'review']);
Route::get('nowplaying', ['uses' => 'Page\NowPlayingController@nowplaying', 'as' => 'nowplaying']);
Route::get('aboutus', ['uses' => 'Page\AboutUsController@aboutus', 'as' => 'aboutus']);
Route::get('contact', ['uses' => 'Page\ContactController@contact', 'as' => 'contact']);

Route::get('search', ['uses' => 'Page\HomeController@search', 'as' => 'search']);

Route::get('review/write', ['uses' => 'Page\ReviewController@write', 'as' => 'review.write']);
Route::post('review/store', ['uses' => 'Page\ReviewController@store', 'as' => 'review.store']);
Route::get('review/thanks', ['uses' => 'Page\ReviewController@thanks', 'as' => 'review.thanks']);
Route::get('review/{id}', ['uses' => 'Page\ReviewController@show', 'as' => 'review.show']);
Route::post('thumbs_up/{id}', ['uses' => 'Page\ReviewController@thumbs_up', 'as' => 'thumbs_up']);
Route::post('thumbs_down/{id}', ['uses' => 'Page\ReviewController@thumbs_down', 'as' => 'thumbs_down']);