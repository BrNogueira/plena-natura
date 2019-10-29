<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doubt;
use App\CallCenter;
use Illuminate\Support\Facades\Mail;
use App\Mail\CallCenterMail;

class CallCenterController extends Controller
{
    public function atendimento(){
        $data['departments']  = \App\Departments::all();
        return view('/callcenter/atendimento', $data);
    }

    public function duvidas(){
        $data['duvidas'] = Doubt::all();
        return view('callcenter/duvidas', $data);
    }

    public function empresa(){
        $data['empresa'] = CallCenter::orderBy('id', 'desc')->first();
        return view('callcenter/empresa', $data);
    }
    public function fretes(){
        $data['frete'] = CallCenter::orderBy('id', 'desc')->first()->frete;
        return view('callcenter/fretes', $data);
    }

    public function troca(){
        $data['troca'] = CallCenter::orderBy('id', 'desc')->first()->trocas;
        return view('callcenter/troca', $data);
    }

    public function privacidade(){
        $data['privacidade'] = CallCenter::orderBy('id', 'desc')->first()->privacidade;
        return view('callcenter/privacidade', $data);
    }

    public function enviarAtendimento(Request $request){
        $data['name']  = $request->name;
        $data['email'] = $request->email;
        $data['order'] = $request->order;
        $data['subject'] = $request->subject;
        $data['phone']   = $request->phone;
        $data['msg']     = $request->msg;
        Mail::to('leonardo@plenanatura.com.br')
            ->send(new CallCenterMail($data));
        return redirect('/atendimento');
    }

}
