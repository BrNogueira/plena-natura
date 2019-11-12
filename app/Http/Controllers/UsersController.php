<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function personalData(){
        return view('users.personal-data');
    }

    public function changePersonalData(Request $request){
        $id = \Auth::user()->id;
        $user =  User::find($id);
        $user->cpf      = $request->cpf;
        $user->lastname = $request->lastName;
        $user->name     = $request->name;
        $user->phone    = $request->phone;
        if($user->save()){
            return redirect('/dados-pessoais');
        }else{
            return redirect('/dados-pessoais');
        }
    }

    public function registrationData(){
        return view('users.registration-data');
    }

    public function changeEmail(Request $request){
        $verify = User::where('email', $request->newEmail)->get()->count();
        if($verify == 0){
            $id = \Auth::user()->id;
            $user =  User::find($id);
            $user->email = $request->newEmail;
            $user->save();
            return redirect('/dados-cadastrais');
        }else{
            return redirect('/dados-cadastrais');
        }
    }

    public function changePassword(Request $request){
        $id = \Auth::user()->id;
        $user =  User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/dados-cadastrais');
    }
}
