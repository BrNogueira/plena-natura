@extends('layouts.app_pag')

@section('content')
<section class="container-miolo margin-top scrolled">
    <div class="wrapper">
        <div id="loader"></div>
        <div class="cart">
            <h2>
                Resumo do Carrinho
            </h2>
            <table class="cart-big" id='cart2' border="1">
                <thead>
                    <tr>
                        <td>
                            Produto
                        </td>
                        <td>
                            Preço
                        </td>
                        <td>
                            Qtd.
                        </td>
                        <td>
                        </td>
                        <td>
                            Total
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @if(miniCart() == true)
                    @foreach($products as $product)
                    @php
                    $p = product($product['product_id']);
                    @endphp
                    <tr data-id='{{$product['product_id']}}' data-price='{{$p->price}}' data-quantity='{{$product['quantity']}}'>
                            <td>
                                <img src="images/produto.jpg" alt="Nome do Produto">
                                <span>{{$p->name}}</span>
                            </td>
                            <td>
                                <span>R${{money($p->price)}}</span>
                            </td>
                            <td>
                                <span class="input">
                                    <input type="text" disabled class='qnt' value="{{$product['quantity']}}">
                                    <div class="plus sign plus-sign">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div>
                                    <div class="minus sign minus-sign">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </div>
                                    
                                </span>
                            </td>
                            <td>
                                <a href="#" title="Excluir"  class="exclude">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <span class='itemTotal'>R${{money($p->price *  $product['quantity'])}}</span>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="full">
                <label>
                    <i class="fa fa-gift" aria-hidden="true"></i>
                    <input type="checkbox">
                    <span>
                        Embrulhar para presente
                    </span>
                </label>

                <form id='coupon' method='post' action='/insertcoupon'>
                    {{csrf_field()}}
                    <i class="fa fa-ticket" aria-hidden="true"></i>
                    <input type="text" name='name' placeholder="Cupom de desconto"> 
                    <button type='submit'>OK</button> <span class='badge' id='couponResponse' style='display: none; padding-left: 7px;'></span>
                </form>

                <div class="frete">
                    <form method='post' id='frete' action='/deadline'>
                        {{csrf_field()}}
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>
                            Calcular valor do frete:
                        </span>
                        <input name='cep' type="text" placeholder="CEP">
                        <button  id="frete-table">OK</button>
                        <span  class='badge loader' id='freteResponse' style='display: none; padding-left: 7px;'></span>
                    </form>
                    <em>
                        Frete grátis: Compras acima de R$ 99,90. <a href="#" id="rule">Confira a regra.</a>
                    </em>


                    <table class="valor">
                    {{csrf_field()}}
                        <tr>
                            <td>
                                <span>
                                    Subtotal
                                </span>
                            </td>
                            <td>
                                <span id='subtotal'>
                                    R$138,40
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    Descontos
                                </span>
                            </td>
                            <td>
                                <span id='desconto' data-value='0'>
                                    - R$13,40
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    Entrega
                                </span>
                            </td>
                            <td>
                                <span id='entrega'>
                                    R$0,00
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    Total
                                </span>
                            </td>
                            <td>
                                <span id='total'>
                                    R$138,40
                                </span>
                            </td>
                        </tr>
                    </table>
                    <a href="{{ url('/identificacao') }}" title="Finalizar Pedido" class="btn">
                        Finalizar Pedido
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection