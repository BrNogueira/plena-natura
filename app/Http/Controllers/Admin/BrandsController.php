<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;

class BrandsController extends Controller
{
    public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index(){
      $data['brands'] = Brand::paginate(10);
      return view('admin.brands.index', $data);
    }

    public function insertProviderForm(){
      return view('admin.brands.new');
    }

    public function store(Request $request){
      $brand = new Brand;
      $brand->image = $request->image;
      $imageName = time().'.'.request()->image->getClientOriginalExtension();
      request()->image->move(public_path('images'), $imageName);
      return back()
      ->with('success','You have successfully upload image.')
      ->with('image',$imageName);

      $brand->name = $request->name;
      $brand->type = $request->tipo_pessoa;
      $brand->cpf_cnpj = $request->has('cnpj') ? $request->cnpj : $request->cpf;
      if($request->inc_insc_est == 1 ){
        $brand->state_registration_indicator = 'Contribuinte';
      }else if($request->inc_insc_est == 2 ){
        $brand->state_registration_indicator = 'Contribuinte isento';
      }else{
          $brand->state_registration_indicator = 'Não contribuinte';
      }
      $brand->body = $request->body;
      $brand->birthday = date("Y-m-d", strtotime($request->aniversario));
      $brand->rg = $request->has('rg') ? $request->rg : null;
      $brand->state_registration = $request->has('insc_estadual') ? $request->insc_estadual : null;
      $brand->social_reason = $request->has('razao_social') ? $request->razao_social : null;
      $brand->city_registration = $request->has('insc_municipal') ? $request->insc_municipal : null;
      $brand->stranger_identity = $request->id_estrangeiro;
      $brand->cep = $request->has('cep') ? $request->cep : null;
      $brand->street = $request->has('endereco') ? $request->endereco : null;
      $brand->number = $request->has('numero') ? $request->numero : null;
      $brand->district = $request->has('bairro') ? $request->bairro : null;
      $brand->complements = $request->has('complemento') ? $request->complemento : null;
      $brand->city = $request->has('cidade') ? $request->cidade : null;
      $brand->comercial_phone = $request->has('fone_comercial') ? $request->fone_comercial : null;
      $brand->email = $request->has('email') ? $request->email : null;
      $brand->home_phone = $request->has('fone_residencial') ? $request->fone_residencial : null;
      $brand->phone = $request->has('celular') ? $request->celular : null;
      $brand->description = $request->has('descricao') ? $request->descricao : null;
      
      if($brand->save()){
          $data['success'] = true;
          $data['msg']     = 'Fornecedor cadastrado com sucesso!';
          return redirect('/admin/fornecedores/')->with($data);
      }else{
          $data['msg']     = 'Erro ao tentar inserir novo fornecedor';
          return redirect()->back()->withErrors($data);
      }

    }
    public function imageUpload()
    {
        return view('admin.brands.new');
    }

    public function storeJson(Request $request){
      $brand = new Brand;
      $brand->name = $request->name;
      $brand->image = $request->image;

      $brand->save();
      return response()->json(['name' => $brand->name, 'id' => $brand->id]);
    }

    public function editBrandForm($id){
      $data['brand'] = Brand::findOrFail($id);
      return view("admin.brands.edit", $data);
    }

    public function edit(Request $request, $id){
      $brand = Brand::findOrFail($id);
      $brand->name = $request->name;
      if($request->has('tipo_pessoa')){
              $brand->type = $request->tipo_pessoa;
      }

      $brand->cpf_cnpj = $request->has('cnpj') ? $request->cnpj : $request->cpf;
      if($request->has("inc_insc_est")){
        if($request->inc_insc_est == 1 ){
          $brand->state_registration_indicator = 'Contribuinte';
        }else if($request->inc_insc_est == 2 ){
          $brand->state_registration_indicator = 'Contribuinte isento';
        }else{
            $brand->state_registration_indicator = 'Não contribuinte';
        }
      }

      $brand->birthday = date("Y-m-d", strtotime($request->aniversario));
      $brand->rg = $request->has('rg') ? $request->rg : null;
      $brand->state_registration = $request->has('insc_estadual') ? $request->insc_estadual : null;
      $brand->social_reason = $request->has('razao_social') ? $request->razao_social : null;
      $brand->city_registration = $request->has('insc_municipal') ? $request->insc_municipal : null;
      $brand->stranger_identity = $request->id_estrangeiro;
      $brand->cep = $request->has('cep') ? $request->cep : null;
      $brand->street = $request->has('endereco') ? $request->endereco : null;
      $brand->number = $request->has('numero') ? $request->numero : null;
      $brand->district = $request->has('bairro') ? $request->bairro : null;
      $brand->complements = $request->has('complemento') ? $request->complemento : null;
      $brand->city = $request->has('cidade') ? $request->cidade : null;
      $brand->comercial_phone = $request->has('fone_comercial') ? $request->fone_comercial : null;
      $brand->email = $request->has('email') ? $request->email : null;
      $brand->email = $request->has('email') ? $request->email : null;
      $brand->home_phone = $request->has('fone_residencial') ? $request->fone_residencial : null;
      $brand->phone = $request->has('celular') ? $request->celular : null;
      $brand->description = $request->has('descricao') ? $request->descricao : null;
      if($brand->save()){
          $data['success'] = true;
          $data['msg']     = 'Fornecedor atualizado com sucesso!';
          return redirect('/admin/fornecedores/')->with($data);
      }else{
          $data['msg']     = 'Erro ao tentar atualizar fornecedor';
          return redirect()->back()->withErrors($data);
      }

    }



    public function delete(Request $request){

      foreach ($request->brands as $value) {
         Brand::where('id', $value)->delete();
      }
      return redirect('/admin/fornecedores');
    }
}
