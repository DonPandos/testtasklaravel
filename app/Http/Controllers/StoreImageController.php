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
    Debugbar::info($article);
    $image_file = Image::make($article->image);
    $response = Response::make($image_file->encode('png'));
    $response->header('Content-Type', 'image/png');
    return $response;
  }
}
