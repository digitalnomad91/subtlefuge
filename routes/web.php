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

Route::get('/', function () {
    return view('index');
});

Route::get('/resume', function () {
    return view('resume');
});
Route::get('/affirmations', function () {
    return view('affirmations');
});

Route::get('/tao', function () {
    return view('tao');
});

Route::get('/visual', function () {
    return view('art');
});

Route::get('/music', function () {
    return view('music');
});
Route::get('/crypto', function () {
    return view('crypto');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/webhooks/jellyfin', 'HomeController@webhookJellyfin')->name('webhookJellyfin');



/*
 * File Manager Routes
*/
Route::get('/files', "FileController@viewList");
Route::post('/file/upload', "FileController@postUpload");


/*
 * Routes for Link Controller
*/
Route::get('link/new', 'LinkController@getNewCommunityLink')->middleware('auth');;
Route::post('link/new', 'LinkController@postNewCommunityLink')->middleware('auth');;
Route::get('link/{id}/comments', 'LinkController@getViewCommunityLink');
Route::get('link/check', 'LinkController@LookupLink');
Route::get('vote/{type}/{id}', 'VoteController@postVote');

