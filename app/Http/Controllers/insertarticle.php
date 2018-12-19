<?php


/*
|--------------------------------------------------------------------------
| insert Controller
|--------------------------------------------------------------------------
|
| This controller handles the articles that are getting inserted
|
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class insertarticle extends Controller
{
  public function store() {
        // store new articles
        $article->price       = Input::get('price');
        $article->articles        = Input::get('articles');
        $article->info        = Input::get('info');
        $article->save();

        // redirect
        return \Redirect::to('addmyarticle');
    }
}
