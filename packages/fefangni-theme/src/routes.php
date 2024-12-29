<?php

use Illuminate\Support\Facades\Route;

Route::match(['GET', 'POST'], '/exemple', [
  'as' => 'exemple',
  'uses' => 'ExampleController@indexAction'
]);
