<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Article;
use Debugbar;
use Image;

class StoreImageController extends Controller
{
  public function fetch_image($image_id){
    $article = Article::findOrFail($image_id);
    //Debugbar::info(base64_decode($article->image));
    $image_file = Image::make($article->image);
    $response = Response::make(Storage::get('/public/img/' . $article->filename)));
    $response->header('Content-Type', 'image/png');
    return $response;
  }
}
