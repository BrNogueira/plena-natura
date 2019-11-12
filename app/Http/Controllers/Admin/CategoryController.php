<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;


class CategoryController extends Controller
{
  public function __construct(){
     // $this->middleware('auth:admin');
  }

  public function index(){
    $data['categories'] = Category::paginate(10);
    return view("admin.category.categories", $data);
  }

  public function insertCategoryForm(){
    return view("admin.category.new");
  }

  public function store(Request $request){
    $category = new Category();
    
    $category->name = $request->name;
    $category->color = $request->color;
    $category->icon = $request->icon;
    $category->slug = makeSlug($request->name);
    $category->img = 'images/marcas.jpg';
    $category->active = $request->active;
    $category->save();

    return redirect('/admin/categorias');
  }

  public function storeJson(Request $request){
    $category = new Category();
    
    $category->name = $request->name ? $request->name : "Categoria" . rand(1, 52);
    $category->color = $request->color;
    $category->icon = $request->icon ? $request->icon : 'fa fa-gear';
    $category->slug = makeSlug($request->name);
    $category->img = 'images/marcas.jpg';
    $category->active = $request->active;
    $category->save();
    return response()->json(['name' => $category->name, 'id' => $category->id]);
  }

  public function editCategoryForm($id){
    $data['category'] = Category::findOrFail($id);
    return view("admin.category.edit", $data);
  }

  public function edit(Request $request, $id){
    $category = Category::findOrFail($id);
    $category->name = $request->name;
    if($request->color != null){
        $category->color = $request->color;
    }
    $category->icon = $request->icon;
    $category->slug = makeSlug($request->name);
    $category->active = $request->active;
    $category->save();
    return redirect('/admin/categorias');
  }

  public function delete(Request $request){
    foreach ($request->categories as $value) {
       Category::where('id', $value)->delete();
    }
    return redirect('/admin/categorias');
  }
  
}
