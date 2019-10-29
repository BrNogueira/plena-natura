<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
  public function __construct(){
    $this->middleware('guest:admin', ['except' => [
            'logout'
        ]]);
  }


  public function showLoginForm(){
    return view("admin.auth.login");
  }

  public function login(Request $request){
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    if(Auth::guard('admin')->attempt(['email' => $request->email,
     'password' => $request->password], $request->has('remember'))){
       return redirect()->intended('/admin');
     }

     return redirect()->back()->withInputs($request->only('email', 'remember'));
  }

  public function logout(Request $request){
    Auth::guard('admin')->logout();
    return redirect('/admin/login');
  }

}
