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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::redirect('/', '/home');

Route::get('/projects', 'ProjectController@index');
Route::post('/projects', 'ProjectController@store');

Route::post('/projects/{id}/timers/stop', 'TimerController@stopRunning');
Route::post('/projects/{id}/timers', 'TimerController@store');
Route::get('/project/timers/active', 'TimerController@running');

Route::get('/test', function() {
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  $host = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $database = substr($url["path"], 1);

  return $url;

})
