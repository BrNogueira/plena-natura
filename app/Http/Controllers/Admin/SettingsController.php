<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingsController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
  }

  public function index(){
    $data['settings'] = Setting::findOrFail(1);
    return view('admin.settings.index', $data);
  }

  public function update(Request $request){
    $settings = Setting::findOrFail(1);
    $settings->name = $request->name;
    $settings->email = $request->email;
    $settings->cnpj = $request->cnpj;
    $settings->address = $request->address;
    $settings->cep = $request->cep;
    $settings->skype = $request->skype;
    $settings->atendimento = $request->attendance;
    $settings->phone = $request->phone;
    $settings->whatsapp = $request->whatsapp;
    if($settings->save()){
      $data['success'] = true;
      $data['msg']     = 'Configurações Salvas com sucesso!';
      return redirect('admin/configuracoes')->with($data);
    }else{
      $data['msg']     = 'Erro ao tentar salvar configuracoces';
      return redirect()->back()->withErrors($data);
    }
  }
}
