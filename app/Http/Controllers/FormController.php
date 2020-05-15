<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackFormRequest;
use App\Feedback;
use Debugbar;
use App\Article;
use \Datetime;


class FormController extends Controller
{
  public function submit(FeedbackFormRequest $req){
    $feedback = new Feedback();
    $feedback->firstname = $req->input('firstname');
    $feedback->secondname = $req->input('secondname');
    $feedback->patronymic = $req->input('patronymic');
    $feedback->phone = $req->input('phone');
    $feedback->email = $req->input('email');

    $feedback->save();

    return redirect()->route('home');

  }

  public function articlesubmit(Request $req){

    $article = new Article();

    // $article->heading = $req->input('heading');
    // $article->text = $req->input('text');
    // if($req->has('article_image')){
    //   $folder = '/public/img';
    //   $filePath = $folder . $article->name . '.' . $req->file('article_image')->getClientOriginalExtension();
    //   $this->uploadOne($request->file('article_image'), $folder, 'public', $article->heading);
    //   Debugbar::info($req->file('article_image'));
    //   $article->image = $req->file('article_image');
    // }
    // $article->date = new DateTime();
    //
    // $article->save();


    $article->heading = $req->input('heading');
    $article->text = $req->input('text');
    $fileName = time().'.'.$req->article_image->extension();
    $article->filename = $fileName;
    $req->article_image->move(public_path('img'), $fileName);
    $article->save();
    return redirect()->route('adminmenu');
  }

}
