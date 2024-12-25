<?php

use Illuminate\Support\Facades\Route;

Route::match(['GET', 'POST'], '/test', [
  'as' => 'test-page',
  'uses' => 'ExampleController@indexAction'
]);
