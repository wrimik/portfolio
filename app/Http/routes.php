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

Route::get('/', function () {
    $data = [
      'skills' => [
          'php', 'html 5', 'css 3', 'javascript', 'mysql',
          'laralve', 'vuejs', 'jquery', 'sass', 'bootstrap',
          'git', 'emmet', 'illustrator', 'photoshop', 'ubuntu'
      ]
    ];
    return view('welcome')->with($data);
});
