@extends('layouts.app_pag_checkout')

@section('content')
<section>
<body class="shop">
    <!--CONTEUDO -->

        <ul class="social-fixed">
            <li>
                <a href="#" target="_blank" title="Facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>    
            </li>
            <li>
                <a href="#" target="_blank" title="Twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" target="_blank" title="Instagram">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" target="_blank" title="Wordpress">
                    <i class="fa fa-wordpress" aria-hidden="true"></i>
                </a>
            </li>
        </ul>

        <div class="cover-all">

            <div class="frete-info">
                <div class="close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                </div>
                <strong>
                    <i class="fa fa-truck" aria-hidden="true"></i> Política de Frete
                </strong>
                <p>
                    A Plena Natura oferece frete grátis para as compras acima de R$99,90 com algumas excessões.<br><br>
                    Na página de pagamento você poderá ver se há ou não a opção de frete grátis de acordo com o CEP de entrega e os produtos escolhidos. <a href="fretes-e-prazos.html" target="_blank" title="Saiba mais">Saiba mais</a>
                </p>
                
            </div>
            <div class="frete-cart">
                <div class="close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                </div>
                <table class="frete-table" border="1">
                    <thead>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                Entrega em:
                            </td>
                            <td>
                                Valor
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span>
                                    Grátis
                                </span>
                            </td>
                            <td>
                                <span>
                                    23 a 26 - jan
                                </span>
                            </td>
                            <td>
                                <span>
                                    R$0,00
                                </span>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <span>
                                    Econômico
                                </span>
                            </td>
                            <td>
                                <span>
                                    16 a 23 - jan
                                </span>
                            </td>
                            <td>
                                <span>
                                    R$6,66
                                </span>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <span>
                                    Expresso
                                </span>
                            </td>
                            <td>
                                <span>
                                    12 a 16 - jan
                                </span>
                            </td>
                            <td>
                                <span>
                                    R$8,88
                                </span>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <span>
                                    Ultra-Expresso
                                </span>
                            </td>
                            <td>
                                <span>
                                    10 a 12 - jan
                                </span>
                            </td>
                            <td>
                                <span>
                                    R$11,10
                                </span>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <header class="fixed">
            <section class="container-header">
                <div class="wrapper">
                    <div class="pad">
                        <h1>
                            <a href="{{url('index.php')}}" title="Plena Natura - Cosméticos Naturais">
                                <img src="{{url('images/plena-natura-cosmeticos-naturais.jpg')}}" alt="Plena Natura - Cosméticos Naturais">
                            </a>
                        </h1>

                        <ul class="timeline">
                            <li class="checked">
                                <div class="item">
                                    
                                </div>
                                <span>
                                    Carrinho
                                </span>
                            </li>
                            <li class="checked">
                                <div class="item">
                                    
                                </div>
                                <span>
                                    Identificação
                                </span>
                            </li>
                            <li class="checked last">
                                <div class="item">
                                    
                                </div>
                                <span>
                                    Checkout
                                </span>
                            </li>
                            <li>
                                <div class="item">
                                    
                                </div>
                                <span>
                                    Recibo
                                </span>
                            </li>
                        </ul>


                        <a href="tel:1933842744" class="fone-shop">
                            <i class="fa fa-phone" aria-hidden="true"></i> (19) 3384-2744
                        </a>
                    </div>
                </div>
            </section>
        </header>
        <!--HEADER / END -->



        <!-- MIOLO -->

        <section class="container-miolo margin-top scrolled">
            <div class="wrapper">
                <div class="cart">
                    <h2>
                        Endereço e pagamento
                    </h2>

                    <div class="steps">
                        <div class="col-checkout">
                            <div class="tabela">
                                <h3>
                                    1. Informações do Cliente
                                </h3>
                                <div class="body-table">
                                    <form>
                                        <label>
                                            <span>
                                                E-mail
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Senha
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Confirmar
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                CPF
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Nome
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Sobrenome
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Nascimento
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Sexo
                                            </span>
                                            <input type="text">
                                        </label>
                                    </form>
                                </div>
                            </div>



                            <div class="tabela">
                                <h3>
                                    2. Endereço de Entrega
                                </h3>
                                <div class="body-table">
                                    <form>
                                        <label>
                                            <span>
                                                Rua
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Número
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Complemento
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Bairro
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Cidade
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Estado
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Telefone
                                            </span>
                                            <input type="text">
                                        </label>
                                        <label>
                                            <span>
                                                Celular
                                            </span>
                                            <input type="text">
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-checkout">
                            <div class="tabela">
                                <h3>
                                    3. Opções de Entrega
                                </h3>
                                <div class="body-table">
                                    <form>
                                        <label class="select">
                                            <input name="frete" type="radio">
                                            <strong>Grátis</strong>
                                            <span>
                                                23 a 24 - jan
                                            </span>
                                            <span>
                                                R$0,00
                                            </span>

                                            <div class="info-label">
                                                <p>
                                                    O pedido será liberado somente após a aprovação do pagamento. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae diam sit amet tellus imperdiet .
                                                </p>
                                            </div>
                                        </label>
                                        <label class="select">
                                            <input name="frete" type="radio">
                                            <strong>Econômico</strong>
                                            <span>
                                                16 a 23 - jan
                                            </span>
                                            <span>
                                                R$6,66
                                            </span>
                                            <div class="info-label">
                                                <p>
                                                    O pedido será liberado somente após a aprovação do pagamento. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae diam sit amet tellus imperdiet .
                                                </p>
                                            </div>
                                        </label>
                                        <label class="select">
                                            <input name="frete" type="radio">
                                            <strong>Expresso</strong>
                                            <span>
                                                12 a 16 - jan
                                            </span>
                                            <span>
                                                R$8,88
                                            </span>
                                            <div class="info-label">
                                                <p>
                                                    O pedido será liberado somente após a aprovação do pagamento. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae diam sit amet tellus imperdiet .
                                                </p>
                                            </div>
                                        </label>
                                        <label class="select">
                                            <input name="frete" type="radio">
                                            <strong>Ultra-Expresso</strong>
                                            <span>
                                                10 a 12 - jan
                                            </span>
                                            <span>
                                                R$10,10
                                            </span>
                                            <div class="info-label">
                                                <p>
                                                    O pedido será liberado somente após a aprovação do pagamento. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae diam sit amet tellus imperdiet .
                                                </p>
                                            </div>
                                        </label>
                                        <em>
                                            Frete grátis: Compras acima de R$ 99,90. <a href="#" id="rule">Confira a regra.</a><br><br>
                                            O pedido será liberado somente após a aprovação do pagamento
                                        </em>
                                    </form>
                                </div>
                            </div>



                            <div class="tabela">
                                <h3>
                                    4. Formas de Pagamento
                                </h3>
                                <div class="body-table">
                                    <form>
                                        <label class="select">
                                            <input name="pagamento" type="radio">
                                            <strong>Débito em conta</strong>
                                            <div class="info-label">
                                                <label class="select">
                                                    <input name="debito" type="radio">
                                                    <img src="images/cc/caixa.jpg" alt="Caixa">
                                                </label>
                                                <label class="select">
                                                    <input name="debito" type="radio">
                                                    <img src="images/cc/bradesco.jpg" alt="Bradesco">
                                                </label>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae diam sit amet tellus imperdiet .
                                                </p>
                                            </div>
                                        </label>
                                        <label class="select">
                                            <input name="pagamento" type="radio">
                                            <strong>Boleto Bancário</strong>
                                            <div class="info-label">
                                                <ul>
                                                    <li>
                                                        Pagamento somente à vista.
                                                    </li>
                                                    <li>
                                                        O boleto vence em 3 dias.
                                                    </li>
                                                    <li>
                                                        É necessário imprimir o boleto ou utilizar o código de barras do mesmo para fazer o pagamento.
                                                    </li>
                                                    <li>
                                                        Imprima o boleto após a finalização da compra.
                                                    </li>
                                                    <li>
                                                        O boleto não será enviado para o seu endereço físico.
                                                    </li>
                                                </ul>
                                            </div>
                                        </label>
                                        <label class="select">
                                            <input name="pagamento" type="radio">
                                            <strong>Mercado Pago</strong>
                                            <div class="info-label">
                                                <p>
                                                    Finalize sua compra com MercadoPago. É muito simples e seguro:
                                                </p>
                                                <ul>
                                                    <li>
                                                         Finalize a compra.
                                                    </li>
                                                    <li>
                                                        Selecione seu meio de pagamento preferido.
                                                    </li>
                                                    <li>
                                                       Confirme o pagamento.
                                                    </li>
                                                </ul>
                                            </div>
                                        </label>
                                        <label class="select">
                                            <input name="pagamento" type="radio">
                                            <strong>Cartão de Crédito</strong>
                                            <div class="info-label">
                                                <label class="select cc">
                                                    <input name="cc" type="radio">
                                                    <img src="images/cc/amex.jpg" alt="Amex">
                                                    <span>paulo s cardoso</span>
                                                    <span>****.****.****.3988</span>
                                                </label>
                                                <label class="select cc">
                                                    <input name="cc" type="radio">
                                                    <img src="images/cc/mastercard.jpg" alt="Mastercad">
                                                    <span>paulo s cardoso</span>
                                                    <span>****.****.****.3988</span>
                                                </label>
                                                <label class="select outros">
                                                    <input name="cc" type="radio">
                                                    <span>Inserir novo cartão</span>
                                                    <div class="form">
                                                        <label>
                                                            <span>
                                                                N<sup>o</sup> do Cartão
                                                            </span>
                                                            <input type="text">
                                                        </label>
                                                        <label>
                                                            <span>
                                                                N<sup>o</sup> de Parcelas
                                                            </span>
                                                            <select>
                                                                <option>1x de R$400,00</option>
                                                                <option>2x de R$200,00</option>
                                                                <option>3x de R$150,00</option>
                                                            </select>
                                                        </label>
                                                        <label>
                                                            <span class="l2">
                                                               Seu nome<br><small>(como no cartão)</small>
                                                            </span>
                                                            <input type="text">
                                                        </label>
                                                        <label>
                                                            <span>
                                                                Vencimento
                                                            </span>
                                                            <div class="fl">
                                                                <select>
                                                                    <option>Mês</option>
                                                                </select>
                                                                <select>
                                                                    <option>Ano</option>
                                                                </select>
                                                                
                                                            </div>
                                                        </label>
                                                        <label>
                                                            <span>
                                                               Cód. de Segurança
                                                            </span>
                                                            <input type="text">
                                                        </label>
                                                        <label class="select">
                                                            <input type="checkbox"> <span>Salvar cartão para próxima compra</span>
                                                        </label>
                                                        <label class="select">
                                                            <input type="checkbox"> <span>Tornar padrão para a próxima compra</span>
                                                        </label>
                                                    </div>
                                                </label>
                                            </div>
                                        </label>
                                        <label class="select">
                                            <input name="pagamento" type="radio">
                                            <strong>Bitcoin</strong>
                                            <div class="info-label">
                                                <p>
                                                    O pedido será liberado somente após a aprovação do pagamento. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae diam sit amet tellus imperdiet .
                                                </p>
                                            </div>
                                        </label>
                                        <em>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae diam sit amet tellus imperdiet .
                                        </em>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-checkout">
                            <div class="tabela">
                                <h3>
                                    5. Revisão do pedido
                                </h3>
                                <div class="body-table">
                                    <table class="cart-m">
                                        <tr>
                                            <td>
                                                <img src="images/produto.jpg" alt="Nome do Produto">
                                            </td>
                                            <td>
                                                <strong>
                                                    Nome do Produto(...)
                                                </strong>
                                                <span>
                                                    Tamanho: 100ml<br>
                                                    Quantidade: 1
                                                </span>
                                            </td>
                                            <td>
                                                <strong>
                                                    R$ 124,56
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="images/produto.jpg" alt="Nome do Produto">
                                            </td>
                                            <td>
                                                <strong>
                                                    Nome do Produto(...)
                                                </strong>
                                                <span>
                                                    Tamanho: 100ml<br>
                                                    Quantidade: 1
                                                </span>
                                            </td>
                                            <td>
                                                <strong>
                                                    R$ 124,56
                                                </strong>
                                            </td>
                                        </tr>
                                    </table>

                                    <h4>
                                        <i class="fa fa-ticket" aria-hidden="true"></i> Cupons e Vales
                                    </h4>
                                    <form>
                                        <label class="ticket">
                                            <input type="text" placeholder="Cupom de Desconto">
                                            <button>OK</button>
                                        </label>
                                        <label class="ticket">
                                            <input type="text" placeholder="Vale">
                                            <button>OK</button>
                                        </label>
                                    </form>
                                    <h4>
                                        <i class="fa fa-dollar" aria-hidden="true"></i> Valores
                                    </h4>
                                    <table class="value">
                                        <tr>
                                            <td>
                                                Subtotal
                                            </td>
                                            <td>
                                                R$320,00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Descontos
                                            </td>
                                            <td>
                                                - R$3,00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Entrega
                                            </td>
                                            <td>
                                                R$0,00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Total
                                            </td>
                                            <td>
                                                R$320,00
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <a href="recibo.html" class="button-shop">
                                Finalizar Pedido
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <!-- JS PLUGINS -->

        <script type="text/javascript" src="javascripts/custom.js">
        </script>



        <!-- SCRIPTS / END -->


        <!-- GOOGLE ANALYTICS -->


        <!--GOOGLE ANALYTICS / END-->


    <!--CONTEUDO / END -->

</body>

</section>

@endsection


