<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CallCenter;

class CallCenterController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }

  public function company(){
    $data['company'] = CallCenter::orderBy('id', 'desc')->first();
    return view('admin.callcenter.company', $data);
  }

  public function updateCompany(Request $request){
    $company = CallCenter::findOrFail(1);
    $company->sobre = $request->about;
    $company->expressa = $request->express;
    $company->premium = $request->premium;
    $company->descontos = $request->discounts;

    if($company->save()){
      $data['success'] = true;
      $data['msg']     = 'A empresa atualizado com sucesso!';
      return redirect('admin/ajuda/empresa')->with($data);
    }else{
      $data['msg']     = 'Erro ao tentar atualizar a empresa';
      return redirect()->back()->withErrors($data);
    }
  }

  //Fretes e prazos
  public function deadlines(){
    $data['content'] = CallCenter::orderBy('id', 'desc')->first()->frete;
    return view('admin.callcenter.deadlines', $data);
  }

  public function updateDeadlines(Request $request){
    $callcenter = CallCenter::findOrFail(1);
    $callcenter->frete = $request->content;
    // $company->
    if($callcenter->save()){
      $data['success'] = true;
      $data['msg']     = 'Fretes e prazos atualizados com sucesso!';
      return redirect('admin/ajuda/fretes-e-prazos')->with($data);
    }else{
      $data['msg']     = 'Erro ao tentar atualizar';
      return redirect()->back()->withErrors($data);
    }
  }

  public function exchangePolicy(){
    $data['content'] = CallCenter::orderBy('id', 'desc')->first()->trocas;
    return view('admin.callcenter.exchangePolicy', $data);
  }

  public function updateExchangePolicy(Request $request){
    $callcenter = CallCenter::findOrFail(1);
    $callcenter->trocas = $request->content;
    if($callcenter->save()){
      $data['success'] = true;
      $data['msg']     = 'Política de troca atualizada com sucesso!';
      return redirect('admin/ajuda/politica-de-troca')->with($data);
    }else{
      $data['msg']     = 'Erro ao tentar atualizar';
      return redirect()->back()->withErrors($data);
    }
  }

  public function privacyPolicy(){
    $data['content'] = CallCenter::orderBy('id', 'desc')->first()->privacidade;
    return view('admin.callcenter.privacyPolicy', $data);
  }

  public function updatePrivacyPolicy(Request $request){
    $callcenter = CallCenter::findOrFail(1);
    $callcenter->privacidade = $request->content;
    if($callcenter->save()){
      $data['success'] = true;
      $data['msg']     = 'Política de privacidade atualizada com sucesso!';
      return redirect('admin/ajuda/politica-de-privacidade')->with($data);
    }else{
      $data['msg']     = 'Erro ao tentar atualizar';
      return redirect()->back()->withErrors($data);
    }
  }
}
