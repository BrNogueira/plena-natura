<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;

class HomeController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
  }

  public function index(){
    $data['products'] = Product::paginate(10);
      return view("admin.example", $data);
  }
  public function addToCart(Request $request){
    if(\Auth::guest()){
        $products = array();
        if(\Cookie::get('cart') != false){
            $products = unserialize(\Cookie::get('cart'));
        }

        if(empty(array_keys(array_column($products,'product_id'), $request->product_id))){
            $products[] = array('product_id' => $request->product_id, 
                                'quantity' => 1);
        }else{
            $id = array_keys(array_column($products,'product_id'), $request->product_id);
            $products[$id[0]]['quantity'] +=  1;
        }
        \Cookie::queue('cart', serialize($products), 172800);
        return redirect('/carrinho');
    }else{
        $check = Cart::where('product_id', $request->product_id)->where('user_id', \Auth::id())->first();
        if($check){
            $cart = Cart::find($check->id);
            $cart->quantity = $cart->quantity + 1; 
            $cart->save(); 
        }else{
            $cart = new Cart;
            $cart->user_id    = \Auth::id();
            $cart->product_id = $request->product_id;
            $cart->quantity = 1; 
            $cart->save(); 
        }
        return redirect('/carrinho'); 
    }
}

  function adminCount() {
    if(\Auth::check()) {
        return  (object) unserialize(\Cookie::get('products'));
        return is_array($product) ? count($product->unity) :0;
    }
}
function cartCount(){
    if(\Auth::check()){
        return \App\Cart::where('user_id', \Auth::id())->get()->count();
    }else{
        $products = (object) unserialize(\Cookie::get('cart'));
        return is_array($products) ? count($products) : 0;
    }
}
  public function insertProductForm(){
    $data['categorys'] = Category::all();
    $data['brands'] = Brand::all();
    return view('admin.products.new', $data);
  }

  public function store(Request $request){
    $product = new Product;
    $product->name = $request->name;
    $slug = makeSlug($request->name);
    $checkProductBySlug = Product::where('slug', $slug)->get();
    if(count($checkProductBySlug)){
      $slug .= '-'.(count($checkProductBySlug) + 1);
    }
    $product->slug = $slug;
    $product->active = $request->active;
    $product->sku = $request->sku;
    $product->gtin = $request->gtin;
    $product->ncm = $request->ncm;
    $product->price = number_format(is_numeric($request->price) ? $request->price : 0.00, 2, '.', '');
    $product->real_price = number_format(is_numeric($request->real_price) ? $request->real_price : 0.00, 2, '.', '');
    $product->promotion_price = number_format(is_numeric($request->promotion_price) ? $request->promotion_price : 0.00, 2, '.', '');
    $product->weight = number_format(is_numeric($request->weight) ? $request->weight : 0.00 ,2, '.', '');
    $product->gross_weight = number_format(is_numeric($request->gross_weight) ? $request->gross_weight : 0.00 ,2, '.', '');
    $product->expires_at  = $request->expires_at;
    $product->condition = $request->condition;
    $product->width  = number_format(is_numeric($request->width) ? $request->width : 0.00 ,2, '.', '');
    $product->heigth = number_format(is_numeric($request->heigth) ? $request->heigth : 0.00 ,2, '.', '');
    $product->length = number_format(is_numeric($request->length) ? $request->length : 0.00 ,2, '.', '');
    $product->unity  = $request->unity;
    $product->brand_id = $request->brand;
    $product->category_id = $request->category;
    $product->stock = is_numeric($request->stock) ? $request->stock : 0 ;
    $product->description = $request->description ? $request->description : '';

    if($product->save()){
      $data['success'] = true;
      $data['msg']     = 'Produto cadastrado com sucesso!';
      return redirect('/admin/produtos/')->with($data);
    }else{
      $data['msg']     = 'Erro ao tentar inserir produto';
      return redirect()->back()->withErrors($data);
    }

  }

  public function editProductForm($id){
    $data['product'] = Product::findOrFail($id);
    $data['categorys'] = Category::all();
    $data['brands'] = Brand::all();
    return view('admin.products.edit', $data);
  }

  public function edit(Request $request, $id){
    $product = Product::findOrFail($id);
    $product->name = $request->name;
    if($request->has("active")){
      $product->active = $request->active;
    }

    if($request->has("condition")){
      $product->condition = $request->condition;
    }
    if($request->has("unity")){
      $product->unity  = $request->unity;
    }

    if($request->has("brand")){
      $product->brand_id = $request->brand;
    }

    if($request->has("category")){
      $product->category_id = $request->category;
    }
      $product->sku = $request->sku;
      $product->gtin = $request->gtin;
      $product->ncm = $request->ncm;
      $product->price = number_format(is_numeric($request->price) ? $request->price : 0.00, 2, '.', '');
      $product->real_price = number_format(is_numeric($request->real_price) ? $request->real_price : 0.00, 2, '.', '');
      $product->promotion_price = number_format(is_numeric($request->promotion_price) ? $request->promotion_price : 0.00, 2, '.', '');
      $product->weight = number_format(is_numeric($request->weight) ? $request->weight : 0.00 ,2, '.', '');
      $product->gross_weight = number_format(is_numeric($request->gross_weight) ? $request->gross_weight : 0.00 ,2, '.', '');
      $product->expires_at  = $request->expires_at;
      $product->width  = number_format(is_numeric($request->width) ? $request->width : 0.00 ,2, '.', '');
      $product->heigth = number_format(is_numeric($request->heigth) ? $request->heigth : 0.00 ,2, '.', '');
      $product->length = number_format(is_numeric($request->length) ? $request->length : 0.00 ,2, '.', '');
      $product->stock = is_numeric($request->stock) ? $request->stock : 0 ;
      $product->description = $request->description ? $request->description : '';

    if($product->save()){
      $data['success'] = true;
      $data['msg']     = 'Produto alterado com sucesso!';
      return redirect('/admin/produtos/')->with($data);
    }else{
      $data['msg']     = 'Erro ao tentar alterar produto';
      return redirect()->back()->withErrors($data);
    }

  }

  public function delete(Request $request){
    foreach ($request->products as $value) {
       Product::where('id', $value)->delete();
    }
    return redirect('/admin/produtos');
  }
}
