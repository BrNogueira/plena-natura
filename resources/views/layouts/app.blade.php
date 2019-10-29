<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Descrição">
    <meta name="keywords" content="palavras chave, separadas por virgula">
    <meta name="author" content="Rodrigo Nogueira">
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

<body>
    <!-- CONTEUDO -->

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
        <div class="cover-all show">
            @guest
           @if(\Cookie::get('first_enter') != true)
            <div class="banner-pop visible" >
                <div class="close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                </div>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <strong>
                    cadastre-se para receber<br>
                    nossas <b>promoções</b> e<br>
                    <b>aproveitar</b> todos os dias!
                </strong>
                <form method='POST' action='/promocoes/emails/cadastrar'>
                {{csrf_field()}}
                    <input type="text" name='name' placeholder="Nome">
                    <input type="email" name='email' placeholder="Email">
                    <button type='submit'>Quero Receber!</button>
                </form>
            </div>
            @endif
            @endguest
            <div class="login t1" id="t1">
                <div class="close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                </div>

                <strong>
                    Use uma das opções para confirmar a sua identidade
                </strong>
                <ul>
                    <li>
                        <a href="#t2" class="inside" title="Receber senha de acesso por email ou SMS">
                            Receber senha de acesso por email {{checkModule('SMS') ? "ou SMS" : ''}}
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#t4" class="inside" title="Entrar com Email e Senha">
                            Entrar com Email ou CPF e Senha
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/auth/facebook')}}" title="Entrar com Facebook">
                            Entrar com Facebook
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/auth/instagram')}}" title="Entrar Instagram">
                            Entrar com Instagram
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="login t2" id="t2">
                <div class="close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                </div>

                <strong>
                    <i class="fa fa-envelope" aria-hidden="true"></i> Por favor informe seu email
                </strong>
                <form id='emailAccessKey' method='post' action='{{url("/key")}}'>
                    <label>
                        <span>
                            Email {{checkModule('SMS') ? "ou SMS" : ''}}
                        </span>
                        <input type="email" data-module='{{checkModule("SMS")}}' id='value' placeholder="seu@email.com {{checkModule('SMS') ? 'ou (99)99999-9999' : ''}}">
                    </label>

                    <div class="btns-down">
                        <a href="#t1" class="inside" title="Voltar">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar
                        </a>
                        <button type='submit'>
                            Continuar
                        </button>
                    </div>
                    @csrf
                </form>
            </div>

            <div class="login t3" id="t3">
                <div class="close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                </div>

                <strong>
                    <i class="fa fa-key" aria-hidden="true"></i> Informar chave de acesso
                </strong>
                <form method='post' id='verifyCod' action='{{url("access/auth/cod")}}'>
                {{csrf_field()}}
                    <label>
                        <span>
                            Agora é só informar o codigo recebido em: <br>
                            <strong id='getEmail'>seuemail@email.com</strong>
                        </span>
                        <input type='hidden' id='authmail' name='authmail'>

                        <input name='cod' id='codToVerify' type="password">

                        <span id='errorCodMsg' style="display: none; color: #ff0707; margin-top: 4px;"></span>
                    </label>

                    <div class="btns-down">
                        <a href="#t2" class="inside" title="Voltar">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar
                        </a>
                        <button>
                            Entrar
                        </button>
                    </div>
                </form>
            </div>

            <div class="login t4" id="t4">
                <div class="close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                </div>

                <strong>
                    <i class="fa fa-lock" aria-hidden="true"></i> Entrar com Email e Senha
                </strong>
                <form id="cpfOrEmailLogin" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <label>
                        <span>
                            Email
                        </span>
                        <input type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="seu@email.com">
                    </label>
                    <label>
                        <span>
                            Senha
                        </span>
                        <input type="password" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="password" placeholder="Sua senha">
                    </label>
                    <input style="display:none;" checked type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <div class="btns-log">
                        <a href="#t2" class="inside" title="Esqueci minha senha">
                            Esqueci minha senha
                        </a>
                    </div>

                    <div class="btns-down">
                        <a href="#t1" class="inside" title="Voltar">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar
                        </a>
                        <button>
                            Entrar
                        </button>
                    </div>
                </form>

            </div>
            @yield('modal')
        </div>

        <!-- HEADER -->
        <header class="">
            <section class="container-header">
                <div class="wrapper">
                    <div class="pad">
                        <h1>
                            <a href="" title="Plena Natura - Cosméticos Naturais">
                                <img src="{{asset('images/plena-natura-cosmeticos-naturais.jpg')}}" alt="Plena Natura - Cosméticos Naturais">
                            </a>
                        </h1>
                        <div class="menu-icon closed">
                            <i class="fa fa-bars" aria-hidden="true"></i> <span>Menu</span>
                        </div>

                        <div class="search-ico closed">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        
                        <div class="shop">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            @if(cartCount() > 0)

                            <div class="items">
                            {{cartCount()}}
                                </div>
                            @endif
                            <div class="mini-shop-cart">
                                <ul>
                                @if(cartCount() > 0)
                                @foreach(getCart() as $cartItem)
                                @php
                                $p = product($cartItem['product_id']);
                                $total = $p->price;
                                @endphp
                                    <li data-id='{{$p->id}}'>
                                        <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                                        <div class="desc">
                                            <strong>{{substr($p->name, 0, 15)}}</strong>
                                            <span>
                                                Tamanho:100ml<br>
                                                Quantidade:1
                                            </span>
                                        </div>
                                        <div class="remove">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </div>
                                        <div class="value">
                                        R${{money($p->price)}}
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/produto.jpg" alt="Nome do Produto">
                                        <div class="desc">
                                            <strong>Powerfit Ômega (...)</strong>
                                            <span>
                                                Tamanho:100ml<br>
                                                Quantidade:1
                                            </span>
                                        </div>
                                        <div class="remove">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </div>
                                        <div class="value">
                                            R$101,20
                                        </div>
                                    </li>
                                    @endforeach
                                    @else
                                    @php
                                        $total = 0.00;
                                    @endphp
                                        Sem produtos no carrinho
                                    @endif
                                </ul>
                                <strong>
                                    Subtotal <span>R${{money($total)}}</span>
                                </strong>
                                <a href="/carrinho" class="button-shop" title="Finalizar Compra">
                                    Finalizar Comprar
                                </a>
                            </div>
                        </div>
                        <div class="user">
                            <a href="#" id="login">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <span>Entrar/Cadastrar</span>
                            </a>
                            <div class="mini-menu-user">
                                <ul>
                                    <li>
                                        <a href="meus-pedidos.html" title="Meus Pedidos">
                                            <i class="fa fa-truck" aria-hidden="true"></i>
                                            <span>Meus<br>Pedidos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="meus-enderecos.html" title="Meus Endereços">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Meus<br>Endereços</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dados-pessoais.html" title="Dados Pessoais">
                                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                            <span>Dados<br>Pessoais</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dados-cadastrais.html" title="Dados Cadastrais">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <span>Dados<br>Cadastrais</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="minhas-avaliacoes.html" title="Minhas Avaliações">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>Minhas<br>Avaliações</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="meus-vales.html" title="Meus Vales">
                                            <i class="fa fa-ticket" aria-hidden="true"></i>
                                            <span>Meus<br>Vales</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mioloTop">
                            <div class="links">
                                <a href="mailto:atendimento@plenanatura.com.br">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> atendimento@plenanatura.com.br
                                </a>
                                <a href="tel:1933842744">
                                    <i class="fa fa-phone" aria-hidden="true"></i> (19) 3384-2744
                                </a>
                                <a href="tel:19989269767">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i> (19) 98926-9767
                                </a>
                                
                            </div>
                            <form>
                                <input type="text" placeholder="O que está procurando?">
                                <button>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <span>buscar</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-search-mob closed">
                <div class="wrapper">
                    <div class="pad">
                        <form>
                            <input type="text" placeholder="O que está procurando?">
                            <button>
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>                
            </section>
            <section class="container-menu closed">
                <div class="lft"></div>
                <div class="wrapper">
                    <nav>
                        <ul>
                        @if($categorys)
                        @foreach($categorys as $c)
                            <li class="marcas">
                                <a href="" title="Marcas">
                                {{$c->name}}
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="marcas.html" title="Marcas - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/marcas.jpg" alt="Marcas - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Marcas
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="saude">
                                <a href="lista-categoria.html" title="Saúde">
                                    Saúde
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Saúde - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/saude.jpg" alt="Saúde - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Saúde
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="cabelos">
                                <a href="lista-categoria.html" title="Cabelos">
                                    Cabelos
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Cabelos - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/cabelos.jpg" alt="Cabelos - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Cabelos
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="rosto">
                                <a href="lista-categoria.html" title="Rosto">
                                    Rosto
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Rosto - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/rosto.jpg" alt="Rosto - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Rosto
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="corpo">
                                <a href="lista-categoria.html" title="Corpo">
                                    Corpo
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Corpo - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/corpo.jpg" alt="Corpo - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Corpo
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="maos">
                                <a href="lista-categoria.html" title="Mãos">
                                    Mãos
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Mãos - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/maos-e-unhas-menu.jpg" alt="Mãos - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Mãos
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="organicos">
                                <a href="lista-categoria.html" title="Orgânicos">
                                    Orgânicos
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Orgânicos - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/organicos.jpg" alt="Orgânicos - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Orgânicos
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="materias-primas">
                                <a href="lista-categoria.html" title="Matérias-Primas">
                                    Matérias-Primas
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Matérias-Primas - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/materias-primas.jpg" alt="Matérias-Primas - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Matérias-Primas
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="casa">
                                <a href="lista-categoria.html" title="Casa">
                                    Casa
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Casa - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/casa.jpg" alt="Casa - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Casa
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="veganos">
                                <a href="lista-categoria.html" title="Veganos">
                                    Veganos
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Veganos - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/veganos.jpg" alt="Veganos - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Veganos
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="pet">
                                <a href="lista-categoria.html" title="Pet">
                                    Pet
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Pet - Clique e confira nossa linha">
                                            <figure>
                                                <img src="images/pet.jpg" alt="Pet - Clique e confira nossa linha">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Pet
                                                </strong>
                                                <span>
                                                    Clique e confira nossa linha
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="ofertas">
                                <a href="lista-categoria.html" title="Ofertas">
                                    Ofertas
                                </a>
                                <div class="sub">
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>


                                        <ul>
                                            <li class="title">
                                                <a href="#" title="Sub Categoria">Sub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Subsub Categoria">Subsub Categoria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col2">
                                        <a href="lista-categoria.html" title="Ofertas - Clique e confira nossos produtos em oferta">
                                            <figure>
                                                <img src="images/ofertas.jpg" alt="Ofertas - Clique e confira nossos produtos em oferta">
                                            </figure>
                                            <div class="tx">
                                                <strong>
                                                    Ofertas
                                                </strong>
                                                <span>
                                                    Clique e confira nossos produtos em oferta
                                                </span>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="rgt"></div>
            </section>
        </header>


        <!--HEADER / END -->

        @yield('content')

        <!--FOOTER -->

        <footer>
            <section class="container-top-footer">
                <div class="wrapper">
                    <div class="pad">
                        <div class="col">
                            <h3>
                                <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;Lançamentos
                            </h3>
                            <ul>
                                @foreach (getFooterReleases() as $re )
                                    <li>
                                        <a href="/produto/{{$re->slug}}" title="Nome Produto Lorem">
                                            {{$re->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <h3>
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>&nbsp;&nbsp;Páginas Sugeridas
                            </h3>
                            <ul>
                                 @foreach (getFooterRnd() as $rnd )
                                    <li>
                                        <a href="/produto/{{$rnd->slug}}" title="Nome Produto Lorem">
                                            {{$rnd->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <h3>
                                <i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;&nbsp;Mais Acessadas
                            </h3>
                            <ul>
                                    @foreach (getFooterStars() as $st)
                                    <li>
                                        <a href="/produto/{{$st->slug}}" title="Nome Produto Lorem">
                                            {{$st->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <h3>
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;&nbsp;Direto do Blog
                            </h3>
                            <ul>
                                <li>
                                    <a href="#" title="Nome Produto Lorem">
                                        Nome Produto Lorem
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Nome Produto Lorem">
                                        Nome Produto Lorem
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Nome Produto Lorem">
                                        Nome Produto Lorem
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Nome Produto Lorem">
                                        Nome Produto Lorem
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Nome Produto Lorem">
                                        Nome Produto Lorem
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container-bot-footer">
                <div class="wrapper">
                    <div class="pad">
                        <div class="col">
                            <h3>
                                Atendimento
                            </h3>
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
                        </div>
                        <div class="col">
                            <h3>
                                Ajuda e Suporte
                            </h3>
                            <ul>
                                <li>
                                    <a href="/atendimento" title="Atendimento">
                                        Atendimento
                                    </a>
                                </li>
                                <li>
                                    <a href="/aempresa" title="A Empresa">
                                        A Empresa
                                    </a>
                                </li>
                                <li>
                                    <a href="/duvidas" title="Dúvidas">
                                        Dúvidas
                                    </a>
                                </li>
                                <li>
                                    <a href="/fretes-e-prazos" title="Fretes e Prazos">
                                        Fretes e Prazos
                                    </a>
                                </li>
                                <li>
                                    <a href="/politica-de-troca" title="Política de Troca">
                                        Política de Troca
                                    </a>
                                </li>
                                <li>
                                    <a href="/politica-de-privacidade" title="Política de Privacidade">
                                        Política de Privacidade
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.planalto.gov.br/ccivil_03/leis/L8078.htm" target="_blank" title="Código de Defesa do Consumidor">
                                        Código de Defesa do Consumidor
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col col2">
                            <h3>
                                Selos de Segurança
                            </h3>
                            <ul>
                                @foreach (getStamps() as $st )
                                <li>
                                <a href="{{$st->link}}" title="{{$st->name}}">
                                            <img src="{{asset($st->img)}}" alt="{{$st->name}}">
                                        </a>
                                </li>
                                @endforeach
                            </ul>
                            <h3>
                                Formas de Pagamento
                            </h3>
                            <img src="images/formas-de-pagamento.jpg" alt="Formas de Pagamento">
                        </div>




                    </div>
                    <div class="sign">
                        <img src="images/plena-natura-cosmeticos-naturais-footer.jpg" alt="Plena Natura Cosméticos Naturais">
                        <div class="info">
                            <strong>PLENA NATURA - COSMETICOS E PRODUTOS NATURAIS ME</strong> - CNPJ 04.393.814/0001-94  - Rua Benedito Franco, 253 Jd. Nova Esperança - Campinas - SP  CEP 13058-485<br>
                            Ofertas válidas enquanto durarem nossos estoques | Vendas sujeitas a análise e confirmação de dados pela empresa. © Direitos Reservados plenanatura.com.br
                        </div>
                    </div>

                    <div class="bottom">
                        <a href="{{socialLink('facebook')}}" target="_blank" title="Facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="{{socialLink('twitter')}}" target="_blank" title="Twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="{{socialLink('instagram')}}" target="_blank" title="Instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="http://zpixel.digital" target="_blank" title="Desenvolvido por Zpixel.Digital">
                            <i aria-hidden="true">Desenvolvido por Rodrigo Nogueira - Zpixel.Digital</i>
                        </a>
                    </div>
                </div>

            </section>
        </footer>
        @guest
    @if(\Cookie::get('first_enter') == true)
    <script>$(document).ready(function(){
        $('.cover-all').removeClass('show');
        $('.cover-all .login').removeClass('visible');
        $('.cover-all .formas-pgto').removeClass('visible');
        $('.cover-all .aviseme').removeClass('visible');
        $('.cover-all .frete-cart').removeClass('visible');
        $('.cover-all .frete-info').removeClass('visible');
        $('.cover-all .banner-pop').removeClass('visible');
    });
    </script>
    @else

    @endif
    @else
    <script>$(document).ready(function(){
        $('.cover-all').removeClass('show');
        $('.cover-all .login').removeClass('visible');
        $('.cover-all .formas-pgto').removeClass('visible');
        $('.cover-all .aviseme').removeClass('visible');
        $('.cover-all .frete-cart').removeClass('visible');
        $('.cover-all .frete-info').removeClass('visible');
        $('.cover-all .banner-pop').removeClass('visible');
    });
    </script>
    @endguest
<script> </script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}">
    </script>

    <script>
    $('.button-shop').on('click', function(){
        window.location.href = '/carrinho';
    })
    </script>
     @yield('scripts')

</body>

</html>
