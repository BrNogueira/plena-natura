<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departments;

class DepartmensController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }


    public function index(){
      $data['departments'] = Departments::paginate(10);
      return view("admin.departments.index", $data);
    }


    public function create(){
      return view('admin.departments.new');
    }


    public function store(Request $request){
      $department = new Departments();
      $department->name = $request->name;
      $department->email = $request->email;

      if($department->save()){
        $data['success'] = true;
        $data['msg']     = 'Departamento cadastrado com sucesso!';
        return redirect('admin/atendimento/departamentos')->with($data);
      }else{
        $data['msg']     = 'Erro ao tentar cadastrar departamento';
        return redirect()->back()->withErrors($data);
      }
    }

    public function edit($id){
      $data['department'] = Departments::findOrFail($id);
      return view('admin.departments.edit', $data);
    }


    public function update(Request $request, $id){
      $department = Departments::findOrFail($id);
      $department->name = $request->name;
      $department->email = $request->email;

      if($department->save()){
        $data['success'] = true;
        $data['msg']     = 'Departamento atualizado com sucesso!';
        return redirect('admin/atendimento/departamentos')->with($data);
      }else{
        $data['msg']     = 'Erro ao tentar atualizar departamento';
        return redirect()->back()->withErrors($data);
      }
    }


    public function destroy(Request $request){
      foreach ($request->departments as $value) {
         Departments::where('id', $value)->delete();
      }
      return redirect('/admin/atendimento/departamentos');
    }
}
