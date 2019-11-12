<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doubt;

class DoubtsController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }


    public function index(){
      $data['doubts'] = Doubt::paginate(10);
      return view("admin.doubts.index", $data);
    }


    public function create(){
      return view('admin.doubts.new');
    }


    public function store(Request $request){
      $doubt = new Doubt();;
      $doubt->question = $request->question;
      $doubt->answer = $request->answer;

      if($doubt->save()){
        $data['success'] = true;
        $data['msg']     = 'Duvida cadastrado com sucesso!';
        return redirect('admin/ajuda/duvidas')->with($data);
      }else{
        $data['msg']     = 'Erro ao tentar cadastrar duvida';
        return redirect()->back()->withErrors($data);
      }
    }

    public function edit($id){
      $data['doubt'] = Doubt::findOrFail($id);
      return view('admin.doubts.edit', $data);
    }


    public function update(Request $request, $id){
      $doubt = Doubt::findOrFail($id);
      $doubt->question = $request->question;
      $doubt->answer = $request->answer;

      if($doubt->save()){
        $data['success'] = true;
        $data['msg']     = 'Dúvida atualizada com sucesso!';
        return redirect('admin/ajuda/duvidas')->with($data);
      }else{
        $data['msg']     = 'Erro ao tentar atualizar';
        return redirect()->back()->withErrors($data);
      }
    }


    public function destroy(Request $request){
      foreach ($request->doubts as $value) {
         Doubt::where('id', $value)->delete();
      }
      return redirect('/admin/ajuda/duvidas');
    }
}
