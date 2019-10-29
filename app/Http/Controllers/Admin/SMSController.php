<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Setting;
class SMSController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $sms = Setting::find(1);
        $data['sms_on'] = $sms->sms_on;
        $data['sms_login'] = $sms->sms_login;
        $data['sms_token'] = $sms->sms_token;
        return view('admin.sms.control', $data);
    }

    public function save(Request $request){
        $sms = Setting::find(1);
        $sms->sms_on = $request->on ? $request->on : 0 ;
        $sms->sms_login = $request->login ? $request->login : '';
        $sms->sms_token = $request->token ? $request->token : '';
        $sms->save();
        return redirect('/admin/sms');
    }
}
