<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    private $paginate = 1;
    public function productView($productSlug){
        loadHelper('CategoryHelper');
        $data['product'] = Product::where('slug', $productSlug)->firstOrFail();

        return view('products.view_product', $data);
    }



    public function categoryView(Request $request, $categorySlug){
        $data['category']  = Category::where('slug', $categorySlug)->firstOrFail();
        // Verificação de ordenação e tratamento de erros
        if($request->order){
            if($request->order == 'clicks' or $request->order == 'id' or $request->order == 'name'){
                if($request->order == 'name'){
                    $order = 'asc';
                }else{
                    $order = 'desc';
                }
                $data['products']  = Product::where('category_id', $data['category']->id )
                ->orderBy($request->order, $order)
                ->paginate($this->paginate);
            }else{
                $data['products']  = Product::where('category_id', $data['category']->id )->paginate($this->paginate);
            }
        }else{
            $data['products']  = Product::where('category_id', $data['category']->id )->paginate($this->paginate);
        }
        return view('products.categorys', $data);
    }

    public function searchProducts(Request $request){
        // Verificação de ordenação e tratamento de erros
        if($request->q){
            if($request->order ){
                if($request->order == 'clicks' or $request->order == 'id' or $request->order == 'name'){
                    if($request->order == 'name'){
                        $order = 'asc';
                    }else{
                        $order = 'desc';
                    }
                    $data['products']  = Product::where('name', 'like', '%'.$request->q.'%')
                    ->orderBy($request->order, $order)
                    ->paginate($this->paginate);
                }else{
                    $data['products']  = Product::where('name', 'like', '%'.$request->q.'%')->paginate($this->paginate);
                }
            }else{
                $data['products']  = Product::where('name', 'like', '%'.$request->q.'%')->paginate($this->paginate);
            }
        }else{
            $data['products']  = Product::where('name', 'like', '')->paginate($this->paginate);
        }

        return view('products.search', $data);
    }


    public function insertAll(){
    //     var_dump(insertAll());
        
    //     $new_coupon = new \App\Coupon;
    //     $new_coupon->name = 'PLENA10';
    //     $new_coupon->value = 10;
    //     $new_coupon->save();
    //     $new_coupon = new \App\Coupon;
    //     $new_coupon->name = 'PLENA20';
    //     $new_coupon->value = 20;
    //     $new_coupon->save();
    //     $new_coupon = new \App\Coupon;
    //     $new_coupon->name = 'PLENA30';
    //     $new_coupon->value = 30;
    //     $new_coupon->save();

    //     $p = new Product;
    //     $p->name = 'Máscara Facial Bioart Argila Dourada Revitalizante';
    //     $p->price = 35.60;
    //     $p->weight= 1.00;
    //     $p->slug = 'mascara-facial';
    //     $p->category_id = 2;
    //     $p->save();

    //     $p = new Product;
    //     $p->name = 'Powerfit Ômega 3 Nutrilatina - Redutor de Triglicerídeos 100 Capsúlas';
    //     $p->price = 60.30;
    //     $p->weight= 0.70;
    //     $p->slug = 'powerfit-omega';
    //     $p->category_id = 1;
    //     $p->save();

    //     $st = new \App\Stamp;
    //     $st->name = 'Certificado Reclame Aqui';
    //     $st->link = '#';
    //     $st->img  = 'images/certificado-reclame-aqui.jpg';
    //     $st->save();

    //     $st = new \App\Stamp;
    //     $st->name = 'Certificado Google Safe Browsing';
    //     $st->link = '#';
    //     $st->img  = 'images/certificado-google-safe-browsing.jpg';
    //     $st->save();

    //     $st = new \App\Stamp;
    //     $st->name = 'Certificado F Control';
    //     $st->link = '#';
    //     $st->img  = 'images/certificado-f-control.jpg';
    //     $st->save();

    //     $st = new \App\Stamp;
    //     $st->name = 'Certificado Empresa Associada ABCOMM';
    //     $st->link = '#';
    //     $st->img  = 'images/certificado-empresa-associada-abcomm.jpg';
    //     $st->save();

    //     $st = new \App\Stamp;
    //     $st->name = 'Certificado Clique e Valide';
    //     $st->link = '#';
    //     $st->img  = 'images/certificado-clique-e-valide.jpg';
    //     $st->save();

    //     $dp = new \App\Departments;
    //     $dp->name = 'Comercial';
    //     $dp->email = 'leonardo@plenanatura.com.br';
    //     $dp->save();

    //     $st = new \App\Setting;
    //     $st->name = 'Plena Natura';
    //     $st->phone = '(19) 3384-2744';
    //     $st->whatsapp = '(19) 98926-9767';
    //     $st->skype = 'atendimento.plena.natura';
    //     $st->email = 'atendimento@plenanatura.com.br';
    //     $st->atendimento = 'Segunda à Sexta: 08:00 às 18:00';
    //     $st->save();

    //     for($i = 0; $i < 10; $i++){
    //         $dbt = new \App\Doubt;
    //         $dbt->question = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque luctus justo ac element';
    //         $dbt->answer   = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque luctus justo ac elementum. Sed tortor turpis, congue et elit sed, euismod pharetra sem. Curabitur elementum rhoncus neque, nec viverra nunc tincidunt et. Aenean neque est, suscipit a consequat id, lacinia vel magna. In non sapien tempus, laoreet felis in, bibendum sapien. Curabitur tortor est, auctor id massa fringilla, lacinia suscipit nisl. Praesent vitae dui tempus, convallis lectus et, molestie tortor. Cras rhoncus arcu arcu, non laoreet sapien scelerisque sit amet. Vestibulum odio mi, tincidunt id ligula sed, malesuada condimentum velit. Duis quis magna sagittis, vestibulum metus vel, tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. ';
    //         $dbt->save();
    //     }
    //     $ct = new \App\CallCenter;
    //     $ct->sobre = '

    //     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque luctus justo ac elementum. Sed tortor turpis, congue et elit sed, euismod pharetra sem. Curabitur elementum rhoncus neque, nec viverra nunc tincidunt et. Aenean neque est, suscipit a consequat id, lacinia vel magna. In non sapien tempus, laoreet felis in, bibendum sapien. Curabitur tortor est, auctor id massa fringilla, lacinia suscipit nisl. Praesent vitae dui tempus, convallis lectus et, molestie tortor. Cras rhoncus arcu arcu, non laoreet sapien scelerisque sit amet. Vestibulum odio mi, tincidunt id ligula sed, malesuada condimentum velit. Duis quis magna sagittis, vestibulum metus vel, tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus.

    //     Duis convallis fringilla leo, id condimentum lacus. In tincidunt accumsan interdum. Duis ac erat quis augue mollis sagittis. Aliquam erat volutpat. Donec mattis at massa ut faucibus. Donec a varius turpis. Donec viverra metus ac pretium efficitur. Donec in ex ac diam tristique pulvinar eget at libero. Aliquam finibus, dui ut faucibus blandit, velit massa dictum nisl, nec malesuada nibh turpis vitae orci. Suspendisse vel magna nec orci tristique suscipit quis quis ligula. Ut sed fermentum enim. Fusce ultrices, ex at vulputate imperdiet, ligula quam maximus nulla, vitae rutrum dolor justo nec ipsum. Mauris ac augue ipsum. Maecenas non leo nunc.

    //     Sed consectetur et ipsum et feugiat. Proin ac commodo lacus. Curabitur at sollicitudin nisi. Etiam eu nisl mattis, interdum nunc eu, ultricies purus. Morbi id pharetra libero. Vestibulum porttitor porttitor nunc eget tempor. Vestibulum vel elit lacus. Vivamus molestie consectetur eros, at molestie nisl vehicula ut. Maecenas ut purus nec quam pretium aliquam in sed elit. Pellentesque dapibus neque ex, id auctor justo tempor sit amet. Phasellus aliquet nec nisl nec vestibulum. Duis sed auctor ex, eu dapibus odio. Morbi ex diam, venenatis ut quam quis, sodales blandit felis.

    //     Integer malesuada metus sed metus bibendum, nec molestie orci fringilla. Pellentesque sodales posuere vehicula. Vivamus eu maximus eros. Etiam pretium pretium posuere. Phasellus feugiat eu tellus eu malesuada. Quisque rutrum elit at libero tristique tempor. Curabitur vitae aliquam nibh. Sed aliquet libero sem. Morbi ut eleifend nisl, non mattis diam. Aenean non faucibus odio. Ut sed metus massa. Donec et vehicula quam. Aenean eget augue eu enim accumsan pulvinar. Sed vulputate mollis lectus ac maximus. Suspendisse aliquam sit amet libero sit amet cursus.

    //     Maecenas iaculis, lacus non viverra laoreet, elit nisi malesuada risus, in ornare risus nulla sed metus. In pretium est diam, et bibendum neque tristique eget. Donec ipsum mauris, dictum eget venenatis ut, tristique quis metus. Phasellus nec elit nisi. Mauris sit amet nunc nisi. Donec facilisis in est eget sollicitudin. Donec dictum dui ut tristique iaculis. In purus neque, malesuada vel massa et, euismod sollicitudin nibh. Donec nisl augue, sollicitudin vitae mattis nec, venenatis vel nulla. Curabitur nec tortor sit amet nisl posuere molestie vitae vulputate odio. Nunc pharetra vel magna quis facilisis.
    //     ';
    //     $ct->frete = '

    //     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque luctus justo ac elementum. Sed tortor turpis, congue et elit sed, euismod pharetra sem. Curabitur elementum rhoncus neque, nec viverra nunc tincidunt et. Aenean neque est, suscipit a consequat id, lacinia vel magna. In non sapien tempus, laoreet felis in, bibendum sapien. Curabitur tortor est, auctor id massa fringilla, lacinia suscipit nisl. Praesent vitae dui tempus, convallis lectus et, molestie tortor. Cras rhoncus arcu arcu, non laoreet sapien scelerisque sit amet. Vestibulum odio mi, tincidunt id ligula sed, malesuada condimentum velit. Duis quis magna sagittis, vestibulum metus vel, tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus.

    //     Duis convallis fringilla leo, id condimentum lacus. In tincidunt accumsan interdum. Duis ac erat quis augue mollis sagittis. Aliquam erat volutpat. Donec mattis at massa ut faucibus. Donec a varius turpis. Donec viverra metus ac pretium efficitur. Donec in ex ac diam tristique pulvinar eget at libero. Aliquam finibus, dui ut faucibus blandit, velit massa dictum nisl, nec malesuada nibh turpis vitae orci. Suspendisse vel magna nec orci tristique suscipit quis quis ligula. Ut sed fermentum enim. Fusce ultrices, ex at vulputate imperdiet, ligula quam maximus nulla, vitae rutrum dolor justo nec ipsum. Mauris ac augue ipsum. Maecenas non leo nunc.

    //     Sed consectetur et ipsum et feugiat. Proin ac commodo lacus. Curabitur at sollicitudin nisi. Etiam eu nisl mattis, interdum nunc eu, ultricies purus. Morbi id pharetra libero. Vestibulum porttitor porttitor nunc eget tempor. Vestibulum vel elit lacus. Vivamus molestie consectetur eros, at molestie nisl vehicula ut. Maecenas ut purus nec quam pretium aliquam in sed elit. Pellentesque dapibus neque ex, id auctor justo tempor sit amet. Phasellus aliquet nec nisl nec vestibulum. Duis sed auctor ex, eu dapibus odio. Morbi ex diam, venenatis ut quam quis, sodales blandit felis.

    //     Integer malesuada metus sed metus bibendum, nec molestie orci fringilla. Pellentesque sodales posuere vehicula. Vivamus eu maximus eros. Etiam pretium pretium posuere. Phasellus feugiat eu tellus eu malesuada. Quisque rutrum elit at libero tristique tempor. Curabitur vitae aliquam nibh. Sed aliquet libero sem. Morbi ut eleifend nisl, non mattis diam. Aenean non faucibus odio. Ut sed metus massa. Donec et vehicula quam. Aenean eget augue eu enim accumsan pulvinar. Sed vulputate mollis lectus ac maximus. Suspendisse aliquam sit amet libero sit amet cursus.

    //     Maecenas iaculis, lacus non viverra laoreet, elit nisi malesuada risus, in ornare risus nulla sed metus. In pretium est diam, et bibendum neque tristique eget. Donec ipsum mauris, dictum eget venenatis ut, tristique quis metus. Phasellus nec elit nisi. Mauris sit amet nunc nisi. Donec facilisis in est eget sollicitudin. Donec dictum dui ut tristique iaculis. In purus neque, malesuada vel massa et, euismod sollicitudin nibh. Donec nisl augue, sollicitudin vitae mattis nec, venenatis vel nulla. Curabitur nec tortor sit amet nisl posuere molestie vitae vulputate odio. Nunc pharetra vel magna quis facilisis.
    //     ';

    //     $ct->trocas = '

    //     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque luctus justo ac elementum. Sed tortor turpis, congue et elit sed, euismod pharetra sem. Curabitur elementum rhoncus neque, nec viverra nunc tincidunt et. Aenean neque est, suscipit a consequat id, lacinia vel magna. In non sapien tempus, laoreet felis in, bibendum sapien. Curabitur tortor est, auctor id massa fringilla, lacinia suscipit nisl. Praesent vitae dui tempus, convallis lectus et, molestie tortor. Cras rhoncus arcu arcu, non laoreet sapien scelerisque sit amet. Vestibulum odio mi, tincidunt id ligula sed, malesuada condimentum velit. Duis quis magna sagittis, vestibulum metus vel, tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus.

    //     Duis convallis fringilla leo, id condimentum lacus. In tincidunt accumsan interdum. Duis ac erat quis augue mollis sagittis. Aliquam erat volutpat. Donec mattis at massa ut faucibus. Donec a varius turpis. Donec viverra metus ac pretium efficitur. Donec in ex ac diam tristique pulvinar eget at libero. Aliquam finibus, dui ut faucibus blandit, velit massa dictum nisl, nec malesuada nibh turpis vitae orci. Suspendisse vel magna nec orci tristique suscipit quis quis ligula. Ut sed fermentum enim. Fusce ultrices, ex at vulputate imperdiet, ligula quam maximus nulla, vitae rutrum dolor justo nec ipsum. Mauris ac augue ipsum. Maecenas non leo nunc.

    //     Sed consectetur et ipsum et feugiat. Proin ac commodo lacus. Curabitur at sollicitudin nisi. Etiam eu nisl mattis, interdum nunc eu, ultricies purus. Morbi id pharetra libero. Vestibulum porttitor porttitor nunc eget tempor. Vestibulum vel elit lacus. Vivamus molestie consectetur eros, at molestie nisl vehicula ut. Maecenas ut purus nec quam pretium aliquam in sed elit. Pellentesque dapibus neque ex, id auctor justo tempor sit amet. Phasellus aliquet nec nisl nec vestibulum. Duis sed auctor ex, eu dapibus odio. Morbi ex diam, venenatis ut quam quis, sodales blandit felis.

    //     Integer malesuada metus sed metus bibendum, nec molestie orci fringilla. Pellentesque sodales posuere vehicula. Vivamus eu maximus eros. Etiam pretium pretium posuere. Phasellus feugiat eu tellus eu malesuada. Quisque rutrum elit at libero tristique tempor. Curabitur vitae aliquam nibh. Sed aliquet libero sem. Morbi ut eleifend nisl, non mattis diam. Aenean non faucibus odio. Ut sed metus massa. Donec et vehicula quam. Aenean eget augue eu enim accumsan pulvinar. Sed vulputate mollis lectus ac maximus. Suspendisse aliquam sit amet libero sit amet cursus.

    //     Maecenas iaculis, lacus non viverra laoreet, elit nisi malesuada risus, in ornare risus nulla sed metus. In pretium est diam, et bibendum neque tristique eget. Donec ipsum mauris, dictum eget venenatis ut, tristique quis metus. Phasellus nec elit nisi. Mauris sit amet nunc nisi. Donec facilisis in est eget sollicitudin. Donec dictum dui ut tristique iaculis. In purus neque, malesuada vel massa et, euismod sollicitudin nibh. Donec nisl augue, sollicitudin vitae mattis nec, venenatis vel nulla. Curabitur nec tortor sit amet nisl posuere molestie vitae vulputate odio. Nunc pharetra vel magna quis facilisis.
    //     ';
    //     $ct->privacidade = '

    //     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque luctus justo ac elementum. Sed tortor turpis, congue et elit sed, euismod pharetra sem. Curabitur elementum rhoncus neque, nec viverra nunc tincidunt et. Aenean neque est, suscipit a consequat id, lacinia vel magna. In non sapien tempus, laoreet felis in, bibendum sapien. Curabitur tortor est, auctor id massa fringilla, lacinia suscipit nisl. Praesent vitae dui tempus, convallis lectus et, molestie tortor. Cras rhoncus arcu arcu, non laoreet sapien scelerisque sit amet. Vestibulum odio mi, tincidunt id ligula sed, malesuada condimentum velit. Duis quis magna sagittis, vestibulum metus vel, tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus.

    //     Duis convallis fringilla leo, id condimentum lacus. In tincidunt accumsan interdum. Duis ac erat quis augue mollis sagittis. Aliquam erat volutpat. Donec mattis at massa ut faucibus. Donec a varius turpis. Donec viverra metus ac pretium efficitur. Donec in ex ac diam tristique pulvinar eget at libero. Aliquam finibus, dui ut faucibus blandit, velit massa dictum nisl, nec malesuada nibh turpis vitae orci. Suspendisse vel magna nec orci tristique suscipit quis quis ligula. Ut sed fermentum enim. Fusce ultrices, ex at vulputate imperdiet, ligula quam maximus nulla, vitae rutrum dolor justo nec ipsum. Mauris ac augue ipsum. Maecenas non leo nunc.

    //     Sed consectetur et ipsum et feugiat. Proin ac commodo lacus. Curabitur at sollicitudin nisi. Etiam eu nisl mattis, interdum nunc eu, ultricies purus. Morbi id pharetra libero. Vestibulum porttitor porttitor nunc eget tempor. Vestibulum vel elit lacus. Vivamus molestie consectetur eros, at molestie nisl vehicula ut. Maecenas ut purus nec quam pretium aliquam in sed elit. Pellentesque dapibus neque ex, id auctor justo tempor sit amet. Phasellus aliquet nec nisl nec vestibulum. Duis sed auctor ex, eu dapibus odio. Morbi ex diam, venenatis ut quam quis, sodales blandit felis.

    //     Integer malesuada metus sed metus bibendum, nec molestie orci fringilla. Pellentesque sodales posuere vehicula. Vivamus eu maximus eros. Etiam pretium pretium posuere. Phasellus feugiat eu tellus eu malesuada. Quisque rutrum elit at libero tristique tempor. Curabitur vitae aliquam nibh. Sed aliquet libero sem. Morbi ut eleifend nisl, non mattis diam. Aenean non faucibus odio. Ut sed metus massa. Donec et vehicula quam. Aenean eget augue eu enim accumsan pulvinar. Sed vulputate mollis lectus ac maximus. Suspendisse aliquam sit amet libero sit amet cursus.

    //     Maecenas iaculis, lacus non viverra laoreet, elit nisi malesuada risus, in ornare risus nulla sed metus. In pretium est diam, et bibendum neque tristique eget. Donec ipsum mauris, dictum eget venenatis ut, tristique quis metus. Phasellus nec elit nisi. Mauris sit amet nunc nisi. Donec facilisis in est eget sollicitudin. Donec dictum dui ut tristique iaculis. In purus neque, malesuada vel massa et, euismod sollicitudin nibh. Donec nisl augue, sollicitudin vitae mattis nec, venenatis vel nulla. Curabitur nec tortor sit amet nisl posuere molestie vitae vulputate odio. Nunc pharetra vel magna quis facilisis.
    //     ';
    //     $ct->expressa = 'Sed ultricies nec leo in finibus. Nunc lacus mi, accumsan ac faucibus eget, lobortis eget ex. Proin rutrum nulla in justo pharetra fermentum. Nam quis sollicitudin risus. ';
    //     $ct->descontos = 'Sed ultricies nec leo in finibus. Nunc lacus mi, accumsan ac faucibus eget, lobortis eget ex. Proin rutrum nulla in justo pharetra fermentum. Nam quis sollicitudin risus. ';
    //     $ct->premium = 'Sed ultricies nec leo in finibus. Nunc lacus mi, accumsan ac faucibus eget, lobortis eget ex. Proin rutrum nulla in justo pharetra fermentum. Nam quis sollicitudin risus. ';
    //     $ct->save();

    //     \App\User::select('*')->delete();
        
    //     $admin = new \App\Admin;
    //     $admin->name = "Paulo Sérgio";
    //     $admin->email = "comercial@plenanatura.com.br";
    //     $admin->password = \Hash::Make('123456');
    //     $admin->save();
    //     return 'show';
    }
}
