<?php

namespace App\Http\Controllers;

use View;
use Aimeos\Shop\Facades\Shop;

class ExampleController extends Controller
{
  public function indexAction()
  {
    foreach (config('shop.page.announcement') as $name) {
      $params['aiheader'][$name] = Shop::get($name)->header();
      $params['aibody'][$name] = Shop::get($name)->body();
    }
    // do some more stuff
    return View::make('announcement.index', $params);
  }
}
