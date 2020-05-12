<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackFormRequest;
use App\Feedback;

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

}
