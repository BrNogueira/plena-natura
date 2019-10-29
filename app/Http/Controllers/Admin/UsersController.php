<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserAddress;

class UsersController extends Controller
{
  public function __construct(){
    $this->middleware("auth:admin");
  }

  public function index(){
    $data['users'] = User::paginate(10);
    return view('admin.users.index', $data);
  }

  public function insertUserForm(){
    return view('admin.users.new');
  }

  public function store(Request $request){
    $user = new User();
    $user->name = $request->name;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->password = \Hash::make($request->password);
    $user->cpf = $request->cpf ? $request->cpf : $request->cnpj;
    if($request->inc_insc_est == 1 ){
      $user->state_registration_indicator = 'Contribuinte';
    }else if($request->inc_insc_est == 2 ){
      $user->state_registration_indicator = 'Contribuinte isento';
    }else{
        $user->state_registration_indicator = 'Não contribuinte';
    }
    $user->birthday = date("Y-m-d", strtotime($request->aniversario));
    $user->rg = $request->has('rg') ? $request->rg : null;
    $user->state_registration = $request->has('insc_estadual') ? $request->insc_estadual : null;
    $user->social_reason = $request->has('razao_social') ? $request->razao_social : null;
    $user->city_registration = $request->has('insc_municipal') ? $request->insc_municipal : null;
    $user->stranger_identity = $request->id_estrangeiro;
    $user->phone = $request->phone;
    $user->comercial_phone = $request->has('fone_comercial') ? $request->fone_comercial : null;
    $user->home_phone = $request->has('fone_residencial') ? $request->fone_residencial : null;
    $user->phone = $request->has('celular') ? $request->celular : null;
    $user->description = $request->has('descricao') ? $request->descricao : null;

    if($user->save()){
        $address = new UserAddress;
        $address->title       = 'Meu Endereço';
        $address->cep         = isset($request->cep) ? $request->cep : '';
        $address->street      = isset($request->endereco) ? $request->endereco : '';
        $address->city        = isset($request->cidade) ? $request->cidade : '';
        $address->district    = isset($request->bairro) ? $request->bairro : '';
        $address->state       = isset($request->estado) ? $request->estado : '';
        $address->number      = isset($request->numero) ? $request->numero : 0;
        $address->complements = isset($request->complemento) ? $request->complemento : '';
        $address->main        = 1;
        $address->user_id     = $user->id;
        $address->save();
        $data['success'] = true;
        $data['msg']     = 'Usuário cadastrado com sucesso!';
        return redirect('/admin/clientes/')->with($data);
    }else{
        $data['msg']     = 'Erro ao tentar inserir novo usuário';
        return redirect()->back()->withErrors($data);
    }

  }

  public function editUserForm($id){
    $data['user'] = User::findOrFail($id);
    $data['address'] = UserAddress::where("user_id", $id)->where("main", 1)->first();
    return view('admin.users.edit', $data);
  }


  public function edit(Request $request, $id){
    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->password = \Hash::make($request->password);
    $user->cpf = $request->cpf ? $request->cpf : $request->cnpj;
    if($request->inc_insc_est == 1 ){
      $user->state_registration_indicator = 'Contribuinte';
    }else if($request->inc_insc_est == 2 ){
      $user->state_registration_indicator = 'Contribuinte isento';
    }else{
        $user->state_registration_indicator = 'Não contribuinte';
    }
    $user->birthday = date("Y-m-d", strtotime($request->aniversario));
    $user->rg = $request->has('rg') ? $request->rg : null;
    $user->state_registration = $request->has('insc_estadual') ? $request->insc_estadual : null;
    $user->social_reason = $request->has('razao_social') ? $request->razao_social : null;
    $user->city_registration = $request->has('insc_municipal') ? $request->insc_municipal : null;
    $user->stranger_identity = $request->id_estrangeiro;
    $user->phone = $request->phone;
    $user->comercial_phone = $request->has('fone_comercial') ? $request->fone_comercial : null;
    $user->home_phone = $request->has('fone_residencial') ? $request->fone_residencial : null;
    $user->phone = $request->has('celular') ? $request->celular : null;
    $user->description = $request->has('descricao') ? $request->descricao : null;

    if($user->save()){
        $address =  UserAddress::where("user_id", $id)->where("main", 1)->first();;
        if(!$address){
          $address = new UserAddress();
        }
        $address->title       = 'Meu Endereço';
        $address->cep         = isset($request->cep) ? $request->cep : '';
        $address->street      = isset($request->endereco) ? $request->endereco : '';
        $address->city        = isset($request->cidade) ? $request->cidade : '';
        $address->district    = isset($request->bairro) ? $request->bairro : '';
        $address->state       = isset($request->estado) ? $request->estado : '';
        $address->number      = isset($request->numero) ? $request->numero : 0;
        $address->complements = isset($request->complemento) ? $request->complemento : '';
        $address->main        = 1;
        $address->user_id     = $user->id;
        $address->save();
        $data['success'] = true;
        $data['msg']     = 'Usuário alterado com sucesso!';
        return redirect('/admin/clientes/')->with($data);
    }else{
        $data['msg']     = 'Erro ao tentar alterar usuário';
        return redirect()->back()->withErrors($data);
    }

  }

  public function delete(Request $request){

    foreach ($request->users as $value) {
       User::where('id', $value)->delete();
    }
    return redirect('/admin/clientes');
  }
}
