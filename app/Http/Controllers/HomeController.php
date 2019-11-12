<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email_List;
use App\Category;
use App\Product;

// Lembrando que ao expandir devemos trocar os nomes das classes para podermos alterar as cores dentro do site.

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $categorys = Category::orderByRaw("RAND()")->limit(5)->get();
        $ids = array();
        foreach($categorys as $item){
            $product = Product::where('category_id', $item->id)->get()->all();
            if($product > 0){
                array_push($ids, $item->id);
            }
        }

        $data['categorys'] = Category::whereIn('id', $ids)->get();
        \Cookie::queue('first_enter', 'true', 999999);

        return view('index', $data);
    }
    public function BrandsToHome(Request $request) {
        $brands = Brand::orderByRaw("last()")->get();
        $ids = array();
        foreach($brands as $item) {
            $provider = Brand::where('brand_id', $item->id)->gret()-count();
            if($provider >0) {
                array_push($ids,$item->id);
            }else{
                echo'Sem fornecedores cadastrados';
            }
        }
    }
    // Cadastrar e-mail para receber promoções
    public function sendEmailToPromotions(Request $request){
        $email  = Email_list::where('email', $request->email)->get()->count();
        if($email == 0){
        $new_email = new Email_List;
        $new_email->email  = $request->email;
        $new_email->name   = $request->name;
        $new_email->active = 1;
        if($new_email->save()){

            // Deu tudo certo retorna a página inicial
            \Cookie::queue('first_enter', 'true', 999999);
            return \Redirect::back();
        }else{
            // Caso de algum erro
            return \Redirect::back();
        }
        }else{
            return \Redirect::back();
        }
    }

    public function showEmails(){
        $email = Email_List::all();
        foreach($email as $e){
            echo '<li>'. $e->email.'</li>';
        }
    }
    public function imageUpdate() {
        
    }

    public function alterarLinks(Request $req, $id){
        $find = \App\Social_media::find($id);
        $find->link = $req->email;
        $find->save();
        return \Redirect::back();
    }

}
