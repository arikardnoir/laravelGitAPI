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
    return view('github');
});

Route::get('/home', function () {
    return view('github');
});

$this->get('user/{username}','GitHubController@getUser');

$this->get('user','GitHubController@get');

$this->post('users', ['as'=>'post.user','uses'=>'GitHubController@getPostUser']);