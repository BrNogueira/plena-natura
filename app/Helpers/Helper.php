<?php

// Funções que serão utilizadas globalmente.

function loadHelper($helperName) {
    $file = dirname(__FILE__) . DIRECTORY_SEPARATOR . $helperName . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
}

function makeSlug($str){
  $search = array('Ș', 'Ț', 'ş', 'ţ', 'Ş', 'Ţ', 'ș', 'ț', 'î', 'â', 'ă', 'Î', 'Â', 'Ă', 'ë', 'Ë');
  $replace = array('s', 't', 's', 't', 's', 't', 's', 't', 'i', 'a', 'a', 'i', 'a', 'a', 'e', 'E');
  $str = str_ireplace($search, $replace, strtolower(trim($str)));
  $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
  $str = str_replace(' ', '-', $str);
  return preg_replace('/\-{2,}/ ', '-', $str);
}


function settings(){
    return \App\Setting::find(1);
}
function socialLink($item){
    $social = \App\Social_media::where('name', $item)->first();
    return $social->link;
}
function spin(){
}



function money($number){
    return number_format($number, 2, ',', '.');
}

function product($product_id){
    return \App\Product::find($product_id);
}

function getFooterReleases(){
    return \App\Product::orderBy('id','desc')->limit(5)->get();
}

function getFooterStars(){
    return \App\Product::orderBy('clicks','desc')->limit(5)->get();
}

function getFooterRnd(){
    return \App\Product::orderByRaw("RAND()")->limit(5)->get();
}

function menuItens(){
    return \App\Category::where('active', 1)->limit(15)->get();
}

function getStamps(){
    return \App\Stamp::all();
}
//função buscar produtos no minicarrinho 
    function miniCart() {
    if(cartCount() > 0)
    foreach($products as $product)
    $p = product($product['product_id']);
}

function cartCount(){
    if(\Auth::check()){
        return \App\Cart::where('user_id', \Auth::id())->get()->count();
    }else{
        $products = (object) unserialize(\Cookie::get('cart'));
        return is_array($products) ? count($products) : 0;
    }
    var_dump($produts);
    exit;
}

function getCart(){
    if($products > 0){
        return (object) unserialize(\Cookie::get('cart'));
    }else{
        return \App\Cart::where('user_id', \Auth::id())->get();
    }
}

function checkModule($module){
    if($module == 'SMS'){
        $smsCheck = \App\Setting::find(1);
        if($smsCheck->sms_on == 1){
            return true;
        }else{
            return false;
        }
    }
}
