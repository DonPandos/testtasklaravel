<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin(){
      return view('admin', ['feedbacks' => Feedback::all()]);
    }

    public function article(){
      return view('articleform');
    }

    public function adminmenu(){
      return view('adminmenu');
    }

    public function about(){
      return view('about');
    }

    public function contact(){
      return view('contact');
    }

}
