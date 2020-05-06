<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
  /**
  *  Форма входа для админа
  *
  * @return \Illuminate\Http\Response
  */
 public function ShowLoginForm()
 {
    return view('auth.login');
 }



 /**
  *  Совершение входа админа
  *
  * @return \Illuminate\Http\Response
  */
  public function Login(Request $request)
   {
    // проверка данных с формы
     $this->validate($request, [
       'email' => 'required|email',
       'password' => 'required|min:2'
     ]);

     // попытка авторизовать юзера
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
     {
       // если все ок, редирект на страницу для авторизованых
       return redirect()->route('admin.home');
      }

     // если плохо , редирект на форму для входа с предидущими данными
     return redirect()->back()->withInput($request->only('email', 'remember'));
   }
}
