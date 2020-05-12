<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class MainpageController extends Controller
{
    public function index(){
      return view('mainpage', ['articles' => Article::all()]);
    }
}
