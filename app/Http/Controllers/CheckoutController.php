<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Coupon;

class CheckoutController extends Controller
{
    public function index() {
        return view('/checkout');
    }
    
    public function payment(Request $request){
        if(\Auth::guest()()) {
            $idPedido = $request->input('pedido_id');
            
            $check_pedido = Pedido::where('pedido_id', $request->pedido_id)->where('user_id', \Auth::id())->first();
            if($check_pedido){
                $order = Order::find($check->id);
                $order->quantity = $order->quantity + 1; 
                $order->save(); 
            }else{
                $order = new order;
                $order->user_id    = \Auth::id();
                $order->product_id = $request->product_id;
                $order->quantity = 1; 
                $order->save(); 
            }
            return redirect('/carrinho/checkout');
        }else {
            return response()->json(array("success" => false));
        }
    }

    public function createOrder(PreOrder $preOrder, Request $request) {
        $allowedPaymentMethods = config('payment-methods.enabled');
        $request->validate([
            'payment_method' => [
                'required', Rule::in($allowedPaymentMethods),
            ],
            'terms'=> 'accepted',
        ]);
        $order = $this->setUpOrder($preOrder, $request);
        $this->notify($order);
        $url = $this->generatePaymentGateway(
            $request->get('payment_method'),
            $order
        );
        return redirect()->to($url);
    }
    
    protected function generatePaymentGateway($paymentMethod, Order $order) : string {
        $method = new \App\PaymentMethods\MercadoPago;

        return $method->setupPaymentAndGetRedirectURL($order);
    }
}
