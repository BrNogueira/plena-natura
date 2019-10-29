@extends('layouts.app')

@section('content')
<!-- FUllbanner -->
<section class="container-banner margin-top">

<div class="marcas-carrousel">
            <div class="pad" id="owl-fullbanner owl-loaded owl-drag">
            <div class="cliente">
                    <a href="#" title="PlenaNatura-Banner">
                        <img src="{{url('/images/plenanatura(1).jpg')}}" alt="PlenaNatura-Banner">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="PlenaNatura-Banner">
                        <img src="{{url('/images/plenanatura(2).jpg')}}" alt="PlenaNatura-Banner">
                    </a>
                </div>
            </div>
        </div>
</section>
<section class="container-news">
    <div class="wrapper">
        <div class="pad">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span><strong>cadastre-se</strong> para receber <strong>ofertas</strong> exclusivas!</span>
                <form method='POST' action='/promocoes/emails/cadastrar'>
                {{csrf_field()}}
                    <input type="text" name='name' placeholder="Nome">
                    <input type="email" name='email' placeholder="E-mail">
                    <button type='submit'>Quero Receber!</button>
                </form>
        </div>
    </div>
</section>


<section class="container-miolo">
    <div class="wrapper">
        <ul class="banners-destaque-top">
            <li>
                <i class="fa fa-truck" aria-hidden="true"></i>
                <strong>
                    Frete Grátis
                </strong>
                <span>
                    a partir de R$79,90*
                </span>
            </li>

            <li>
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                <strong>
                    Parcele tudo em 12x
                </strong>
                <span>
                    ou em 3x sem juros
                </span>
            </li>

            <li>
                <i class="fa fa-money" aria-hidden="true"></i>
                <strong>
                    Descontos
                </strong>
                <span>
                    5% no boleto, 6% no depósito e 7% no BitCoin
                </span>
            </li>

            <li>
                <i class="fa fa-rocket" aria-hidden="true"></i>
                <strong>
                    Postagem Expressa
                </strong>
                <span>
                    diversas modalidades de entrega
                </span>
            </li>

            <li>
                <i class="fa fa-star" aria-hidden="true"></i>
                <strong>
                    Atendimento Premium
                </strong>
                <span>
                    profissionais treinados para você!
                </span>
            </li>
        </ul>

        <div class="marcas-carrousel">
            <div class="pad" id="owl-cliente">
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
                <div class="cliente">
                    <a href="#" title="Nome da Marca">
                        <img src="{{url('images/logo-cliente.jpg')}}" alt="Nome da Marca">
                    </a>
                </div>
            </div>
        </div>
        <!--VITRINES DE TODAS AS CATEGORIAS -
         ATENÇAO DEV BACK-END:
            SERAO SEMPRE 5 VITRINES ALEATORIAS NA HOME, DE ACORDO COM A CATEGORIA ESCOLHIDA A VITRINE MUDA A CLASSE COM O NOME DA CATEGORIA,
             NO CSS AS CORES JA ESTAO DEFINIDAS DE ACORDO COM OS NOMES DAS CATEGORIAS. CADA CATEGORIA ALEM DE TER A CLASSE TEM UM ICONE DIFERENTE.
              ATENTAR-SE A ISSO NO DESENVOLVIMENTO DO BD, TALVEZ CADASTRAR UM ICONE SEMPRE QUE UMA CATEGORIA FOR CADASTRADA, 
              E UTILIZAR OS ICONES DO FONT-AWESOME COMO ESTOU UTILIZANDO AQUI. 
        -->
        @if($categorys)
        @foreach($categorys as $c)
        <div class="vitrine {{$c->color}}">
            <div class="pad">
                <h2 >
                    <i class="{{$c->icon}}" aria-hidden="true"></i>&nbsp;&nbsp; {{$c->name}}
                </h2>
            </div>
            @php
                $products = \App\Product::where('category_id', $c->id)->get();
            @endphp
            <div class="pad owl-vitrine">
            @foreach ($products as $p)
                <a href="produto/{{$p->slug}}" title="{{$p->name}}" class="produto">
                    <img src="{{url('images/produto.jpg')}}" alt="Nome do Produto">
                    <strong>
                        {{$p->name}}
                    </strong>
                    <div class="star">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="bg">
                        <strong>
                            R${{money($p->price)}}
                        </strong>
                        <span>
                            ou em 10x de <strong>R${{$p->price/10}}</strong>
                        </span>
                        <i>Marca</i>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endforeach
        @else
        @endif
    </div>
</section>

@endsection


