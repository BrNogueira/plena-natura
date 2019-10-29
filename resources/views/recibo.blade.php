@extends('layouts.app_pag_ident')

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
                            <a href="#" title="Plena Natura - Cosméticos Naturais">
                                <img src="images/plena-natura-cosmeticos-naturais.jpg" alt="Plena Natura - Cosméticos Naturais">
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
                            <li class="checked">
                                <div class="item">
                                    
                                </div>
                                <span>
                                    Checkout
                                </span>
                            </li>
                            <li class="checked last">
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
                        Recibo
                    </h2>


                    <strong class="title-id">
                       O Pedido 329328 foi recebido com suceso as 10:20 do dia 12/02/2017
                    </strong>

                    <div class="steps">
                        <div class="col-checkout">
                            <strong>Endereço de Entrega</strong>
                            <p>
                                Paulo Sergio Cardoso<br>
                                Rua Júlio Bocaletti, 128<br>
                                Parque Valença I Campinas / SP - Brasil<br>
                                13058-510   
                            </p>
                        </div>
                        <div class="col-checkout">
                            <strong>Frete</strong>
                            <p>
                                Ultra-Expresso<br>
                                Entrega em: 20/02/2016<br>
                                Valor: R$11,10<br>
                                <a href="#" target="_blank" title="Acompanhe seu pedido aqui">
                                    Acompanhe seu pedido aqui
                                </a>  
                            </p>
                        </div>
                        <div class="col-checkout">
                            <strong>Forma de Pagamento</strong>
                            <p>
                                Cartão de crédito com final 1453<br>  
                                R$ 124,56 (2 parcelas de R$ 62,28)  
                            </p>
                        </div>
                    </div>


                    <table class="cart">
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
                                    Total
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="images/produto.jpg" alt="Nome do Produto">
                                    <span>Powerfit Ômega 3 Nutrilatina - Redutor de Triglicerídeos 100 Capsúlas</span>
                                </td>
                                <td>
                                    <span>R$62,28</span>
                                </td>
                                <td>
                                    <span>2</span>
                                </td>
                                <td>
                                    <span>R$ 126,28</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/produto.jpg" alt="Nome do Produto">
                                    <span>Powerfit Ômega 3 Nutrilatina - Redutor de Triglicerídeos 100 Capsúlas</span>
                                </td>
                                <td>
                                    <span>R$62,28</span>
                                </td>
                                <td>
                                    <span>2</span>
                                </td>
                                <td>
                                    <span>R$ 126,28</span>
                                </td>
                            </tr>                                
                        </tbody>
                    </table>

                    <div class="col-def">
                        <table border="1">
                            <tr>
                                <td>
                                    Subtotal
                                </td>
                                <td>
                                    R$138,93
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Descontos
                                </td>
                                <td>
                                    - R$13,93
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Entrega
                                </td>
                                <td>
                                    Grátis
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Total
                                </td>
                                <td>
                                    R$168,93
                                </td>
                            </tr>
                        </table>
                    </div>
                    <strong class="title-id tnks">
                      Obrigado por comprar na Plena Natura!
                    </strong>
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