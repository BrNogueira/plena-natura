<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="description" content="Descrição">
    <meta name="keywords" content="palavras chave, separadas por virgula">
    <meta name="author" content="JuCamillo Web Co.">
    <meta name="viewport" content="width=device-width">
    <meta name="revisit-after" content="1 days">
    <title>Plena Natura - Cosméticos Naturais</title>

    <!--CSS geral-->
    <link rel="stylesheet" href="{{asset('css/geral.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>

    <!--CSS por seção ou plugin-->

    <!--CSS / END-->

   <!-- favicon -->
   <link rel="icon" href="{{asset('images/favicon.png')}}" >

   <!-- JS bibliotecas -->
   <script src="{{asset('js/jquery-1.10.1.min.js')}}"></script>
   <meta name="csrf-token" content="{{ csrf_token() }}" />

   <!-- <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> -->


   <link rel="stylesheet" href="{{asset('owl-carousel/owl.carousel.css')}}">
   <link rel="stylesheet" href="{{asset('owl-carousel/owl.theme.css')}}">
   <script src="{{asset('owl-carousel/owl.carousel.js')}}"></script>
</head>

<body class="shop">
    <!--CONTEUDO -->

    <ul class="social-fixed">
  
            <li>
                <a href="{{socialLink('facebook')}}" target="_blank" title="Facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>    
            </li>
            <li>
                <a href="{{socialLink('twitter')}}" target="_blank" title="Twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{socialLink('instagram')}}" target="_blank" title="Instagram">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{socialLink('blog')}}" target="_blank" title="Wordpress">
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
                <div class="close" id='selectDeadline'>
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
                    <form method='post' id='selectDeadlineForm' action='/selectDeadline'>
                    <tbody>
                        <tr id='pac'>
                            <td>
                                <span id='label-pac'>
                                    Econômico
                                </span>
                            </td>
                            <td>
                                <span id='prazo-entrega-pac'>
                                    16 a 23 - jan
                                </span>
                            </td>
                            <td>
                                <span id='preco-pac'>
                                    R$6,66
                                </span>
                            </td>
                            <td>
                                <input class='frete_type' name="frete_type" id='pacRadio' type="radio">
                            </td>
                        </tr>


                        <tr id='sedex'>
                            <td>
                                <span>
                                    Expresso
                                </span>
                            </td>
                            <td>
                                <span id='prazo-entrega-sedex'>
                                    12 a 16 - jan
                                </span>
                            </td>
                            <td>
                                <span id='preco-sedex'>
                                    R$8,88
                                </span>
                            </td>
                            <td>
                                <input class='frete_type' name="frete_type" id='sedexRadio' type="radio">
                            </td>
                        </tr>


                        <tr id='sedex10'>
                            <td>
                                <span>
                                    Ultra-Expresso
                                </span>
                            </td>
                            <td>
                                <span id='prazo-entrega-sedex10'>
                                    10 a 12 - jan
                                </span>
                            </td>
                            <td>
                                <span id='preco-sedex10'>
                                    R$11,10
                                </span>
                            </td>
                            <td>
                                <input class='frete_type' name="frete_type" id='s10Radio' type="radio">
                            </td>
                        </tr>
                    </tbody>
                  </form>
                </table>
            </div>
        </div>

        <header class="fixed">
            <section class="container-header">
                <div class="wrapper">
                    <div class="pad">
                        <h1>
                            <a href="/" title="Plena Natura - Cosméticos Naturais">
                                <img src="{{asset('images/plena-natura-cosmeticos-naturais.jpg')}}" alt="Plena Natura - Cosméticos Naturais">
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
                                <div class="item ">
                                    
                                </div>
                                <span>
                                    Identificação
                                </span>
                            </li>
                            <li>
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

        @yield('content')
                <!--FOOTER -->
        <footer>
            <section class="container-bot-footer">
                <div class="wrapper">
                    <div class="pad">
                        <div class="col">
                            <p>
                                {{settings()->atendimento}}<br>

                                <a href="#">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>{{settings()->phone}}</span>
                                </a>
                                <a href="#">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    <span>{{settings()->whatsapp}}</span>
                                </a><br>
                                <a href="#">
                                    <i class="fa fa-skype" aria-hidden="true"></i>
                                    <span>{{settings()->skype}}</span>
                                </a>
                                <a href="#">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>{{settings()->email}}</span>
                                </a>
                            </p>
                            
                            <div class="bottom">
                                <a href="{{socialLink('facebook')}}" title="Facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="{{socialLink('twitter')}}" title="Twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="{{socialLink('instagram')}}" title="Instagram">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#" title="Desenvolvido por JuCamillo Web Co.">
                                    <i aria-hidden="true">Desenvolvido por JuCamillo Web Co.</i>
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

        <script type="text/javascript" src="{{asset('js/custom.js')}}">
        </script>
</body>

</html>

