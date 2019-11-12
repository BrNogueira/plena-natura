@extends('layouts.app_pag_ident')

@section('content')
<section class="container-miolo margin-top scrolled">
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

        <!-- MIOLO -->

        <section class="container-miolo margin-top scrolled">
            <div class="wrapper">
                <div class="cart">
                    <h2>
                        Identificacao
                    </h2>
                    <strong class="title-id">
                        Para finalizar a compra, informe seu e-mail. <span>Rápido. Fácil. Seguro.</span>
                    </strong>

                    <form class="id">
                        <input type="text">
                        <button>
                            Continuar
                        </button>
                    </form>

                    <div class="warn">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <div>
                            <strong>
                                Usamos seu e-mail de forma 100% segura para:
                            </strong>
                            <ul>
                                <li>
                                    Identificar seu perfil
                                </li>
                                <li>
                                    Notificar sobre o andamento do pedido
                                </li>
                                <li>
                                    Gerenciar seu histórico de compras
                                </li>
                                <li>
                                    Acelerar o preenchimento de suas informações
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--FOOTER -->

        <!--FOOTER -->
        <!-- <footer>
            <section class="container-bot-footer">
                <div class="wrapper">
                    <div class="pad">
                        <div class="col">
                            <p>
                                Segunda a Sexta: 08:00 às 18:00<br>

                                <a href="#">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>(11) 2384-3292</span>
                                </a>
                                <a href="#">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    <span>(19) 98926-9767</span>
                                </a><br>
                                <a href="#">
                                    <i class="fa fa-skype" aria-hidden="true"></i>
                                    <span>atendimento.plena.natura</span>
                                </a>
                                <a href="#">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>antedimento@plenanatura.com.br</span>
                                </a>
                            </p>
                            
                            <div class="bottom">
                                <a href="#" title="Facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#" title="Twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#" title="Instagram">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#" title="Desenvolvido por Zpixel.digital">
                                    <i aria-hidden="true">Desenvolvido por Zpixel.digital</i>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <h3>
                                Formas de Pagamento
                            </h3>
                            <img src="images/formas-de-pagamento.jpg" alt="Formas de Pagamento">


                            <div class="sign">
                                <div class="info">
                                    <strong>PLENA NATURA - COSMETICOS E PRODUTOS NATURAIS ME</strong> - CNPJ 04.393.814/0001-94<br>Rua Benedito Franco, 253 Jd. Nova Esperança - Campinas - SP  CEP 13058-485<br>
                                    Vendas sujeitas a análise e confirmação de dados pela empresa. © Direitos Reservados plenanatura.com.br
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>            
        </footer>
 -->


        <!--FOOTER / END -->


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


