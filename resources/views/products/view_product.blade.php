@extends('layouts.app')

@section('content')

    {{-- Seção de produtos completa--}}
      <section class="container-value">
            <div class="wrapper">
                <div class="produto-infos">
                    <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                    <h2>
                        {{$product->name}} 
                    </h2>
                    <a href="carrinho.html" class="button">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                    <span class="value">
                        R${{money($product->price)}} 
                    </span>
                </div>                
            </div>            
        </section>

        <!-- MIOLO -->

        <section class="container-miolo margin-top">
            <div class="wrapper">
                <div class="titulo-produto">
                    <div class="pad">
                        <ul>
                            <li>
                                <a href="/" title="Home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/categoria/{{getCategorySlug($product->category_id)}}" title="{{getCategoryName($product->category_id)}}">
                                    {{getCategoryName($product->category_id)}}
                                </a>
                            </li>
                            <li>
                                <span>
                                    {{$product->name}} 
                                </span>
                            </li>
                        </ul>
                        <h2>
                            {{$product->name}} 
                        </h2>
                    </div>
                </div>
                <div class="produto-display" id="value-area">
                    <div class="galery">
                        <figure>
                            <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                        </figure>
                        <ul class="thumbs">
                            <li>
                                <a href="produto.html" title="Nome do Produto">
                                    <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                                </a>
                            </li>
                            <li>
                                <a href="produto.html" title="Nome do Produto">
                                    <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                                </a>
                            </li>
                            <li>
                                <a href="produto.html" title="Nome do Produto">
                                    <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                                </a>
                            </li>
                            <li>
                                <a href="produto.html" title="Nome do Produto">
                                    <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                                </a>
                            </li>
                            <li>
                                <a href="produto.html" title="Nome do Produto">
                                    <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="side-info">
                        <div class="preco preco-principal">
                            <i class="fa fa-btc" aria-hidden="true"></i>
                            <strong>
                                R${{money($product->price)}}
                            </strong>
                            <div class="tag">
                                <strong>
                                    7% OFF
                                </strong>
                            </div>
                            <div class="descontos">
                                desconto de 7% no bitcoin, 6% via depósito<br>
                                ou 5% a vista no boleto | <a href="#" id="mais-formas" title="Mais Formas">Mais Formas</a>
                            </div>
                        </div>
                        <div class="preco preco-cartao">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <strong>
                                R$132,32
                            </strong>
                            <div class="descontos">
                                no cartão em até 12x de <strong>R$32,32</strong> ou em <strong>3x sem juros</strong>
                            </div>
                        </div>

                        <div class="bg-wrap">
                          <form action='/cart' id='buyNowForm'  method='post'>  
                             {{ csrf_field() }}
                          <input type='hidden' value='{{$product->id}}' name='product_id'>
                             <a type='submit' id='buyNow' href='#' class="button ">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar Agora
                             </a>
                           </form>
                            <span class="disponivel">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Imediata, em estoque
                            </span>
                        </div>
                        <div class="bg-wrap frete">
                            <form method='post' id='frete' action='/deadline'>
                                {{csrf_field()}}
                                <span>
                                    <i class="fa fa-truck" aria-hidden="true"></i> Calcule o frete:
                                </span>
                                <input name='cep' type="text" placeholder="CEP">
                                <button class="spin()" id="frete-table">OK</button>
                           </form>
                            <center>
                               <span style='display: none;'id='entregaProduto'>
                                   R$0,00
                               </span>
                            </center>
                        </div>
                        <div class="bg-wrap size">
                            <strong>
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i> Volumes/Tamanhos
                            </strong>
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <img src="{{asset('images/produto.jpg')}}" alt="10ml">
                                    <span>10 ml</span>
                                </li>
                                <li class="unavailable">
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    <img src="{{asset('images/produto.jpg')}}" alt="10ml">
                                    <span>10 ml</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <img src="{{asset('images/produto.jpg')}}" alt="10ml">
                                    <span>10 ml</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <img src="{{asset('images/produto.jpg')}}" alt="10ml">
                                    <span>10 ml</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="produto-infos">
                    <div class="tabs">
                        <ul class="buttons">
                            <li>
                                <a href="#descricao" title="Descrição" class="active">
                                    Descrição
                                </a>
                            </li>
                            <li>
                                <a href="#indicacao" title="Indicação">
                                    Indicação
                                </a>
                            </li>
                            <li>
                                <a href="#modo-de-usar" title="Modo de Usar">
                                    Modo de Usar
                                </a>
                            </li>
                            <li>
                                <a href="#caracteristicas" title="Características">
                                    Características
                                </a>
                            </li>
                            <li>
                                <a href="#composicao" title="Composição">
                                    Composição
                                </a>
                            </li>
                            <li>
                                <a href="#precaucoes" title="Precauções">
                                    Precauções
                                </a>
                            </li>
                            <li>
                                <a href="#apresentacao" title="Apresentação">
                                    Apresentação
                                </a>
                            </li>
                            <li>
                                <a href="#dimensao-alp" title="Dimensão (AxLxP)">
                                    Dimensão (AxLxP)
                                </a>
                            </li>
                        </ul>
                        <ul class="info">
                            <li id="descricao" class="active">
                                <a href="#descricao" title="Descrição" class="btn-responsive">
                                    Descrição
                                </a>
                                <div class="txt">
                                    <ul class="selos">
                                        <li>
                                            <img src="{{asset('images/selos/cruelty-free.png')}}" alt="Cruelty Free" title="Cruelty Free - Sem testes em animais">
                                        </li>
                                        <li>
                                            <img src="{{asset('images/selos/fragrancia-natural.png')}}" alt="Fragrância Natural" title="Fragrância Natual - Sem fragrâncias sintéticas">
                                        </li>
                                        <li>
                                            <img src="{{asset('images/selos/oleos-essenciais.png')}}" alt="Óleos Essenciais" title="Óleos Essenciais - Desenvolvido com óleos essenciais">
                                        </li>
                                        <li>
                                            <img src="{{asset('images/selos/produto-natural.png')}}" alt="Produto Natural" title="Produto Natural - Ingredientes 100% Naturais" >
                                        </li>
                                        <li>
                                            <img src="{{asset('images/selos/produto-vegano.png')}}" alt="Produto Vegano" title="Produto Vegano - Sem ingredientes de origem animal">
                                        </li>
                                        <li>
                                            <img src="{{asset('images/selos/sem-parabenos.png')}}" alt="Sem Parabenos" title="Sem Parabenos - Não possui parabenos">
                                        </li>
                                        <li>
                                            <img src="{{asset('images/selos/sem-petroleo.png')}}" alt="Sem Petróleo" title="Sem Petróleo - Sem ingredientes derivados do petróleo">
                                        </li>
                                        <li>
                                            <img src="{{asset('images/selos/sem-sulfato.png')}}" alt="Sem Sulfato" title="Sem Sulfato - Sem sulfato na fórmula do produto">
                                        </li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                            <li id="indicacao">
                                <a href="#indicacao" title="Indicação" class="btn-responsive">
                                    Indicação
                                </a>
                                <div class="txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                            <li id="modo-de-usar">
                                <a href="#modo-de-usar" title="Modo de Usar" class="btn-responsive">
                                    Modo de Usar
                                </a>
                                <div class="txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                            <li id="caracteristicas">
                                <a href="#caracteristicas" title="Características" class="btn-responsive">
                                    Características
                                </a>
                                <div class="txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                            <li id="composicao">
                                <a href="#composicao" title="Composição" class="btn-responsive">
                                    Composição
                                </a>
                                <div class="txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                            <li id="precaucoes">
                                <a href="#precaucoes" title="Precauções" class="btn-responsive">
                                    Precauções
                                </a>
                                <div class="txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                            <li id="apresentacao">
                                <a href="#apresentacao" title="Apresentação" class="btn-responsive">
                                    Apresentação
                                </a>
                                <div class="txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                            <li id="dimensao-alp">
                                <a href="#dimensao-alp" title="Dimensão (AxLxP)" class="btn-responsive">
                                    Dimensão (AxLxP)
                                </a>
                                <div class="txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                    </p>
                                    <p>
                                        Integer in pretium metus. Pellentesque molestie justo id massa placerat pharetra. Nullam facilisis purus vitae tellus gravida ullamcorper. Quisque vitae scelerisque tellus. Proin at mollis lacus. Nulla est justo, interdum vel lectus eget, aliquet sollicitudin diam. Morbi ut efficitur neque. Sed ultricies, diam ac convallis posuere, turpis ligula tincidunt metus, non cursus leo odio vel lorem. Aliquam libero ligula, pretium non ante vel, elementum pharetra magna. Nunc placerat mi et eros congue, lobortis volutpat libero pellentesque. Praesent efficitur pulvinar finibus. Maecenas vulputate enim eget ex consectetur semper. Donec lobortis felis at turpis suscipit facilisis. 
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="vitrine oferta mtb">
                    <div class="pad">
                        <h2>
                            Produtos Relacionados
                        </h2>
                    </div>
                    <div class="pad owl-vitrine">
                        <a href="produto.html" title="Nome do Produto" class="produto">
                            
                            <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                            <strong>
                                Arte dos Aromas - Sabonete Facial Esfoliante Copaiba Orgânico 110ml
                            </strong>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="bg">
                                <strong>
                                    R$35,80
                                </strong>
                                <span>
                                    ou em 10x de <strong>R$4,20</strong>
                                </span>
                                <i>Herbia</i>
                            </div>
                        </a>
                        <a href="produto.html" title="Nome do Produto" class="produto">
                            
                            <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                            <strong>
                                Arte dos Aromas - Sabonete Facial Esfoliante Copaiba Orgânico 110ml
                            </strong>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="bg">
                                <strong>
                                    R$35,80
                                </strong>
                                <span>
                                    ou em 10x de <strong>R$4,20</strong>
                                </span>
                                <i>Herbia</i>
                            </div>
                        </a>
                        <a href="produto.html" title="Nome do Produto" class="produto">
                            
                            <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                            <strong>
                                Arte dos Aromas - Sabonete Facial Esfoliante Copaiba Orgânico 110ml
                            </strong>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="bg">
                                <strong>
                                    R$35,80
                                </strong>
                                <span>
                                    ou em 10x de <strong>R$4,20</strong>
                                </span>
                                <i>Herbia</i>
                            </div>
                        </a>
                        <a href="produto.html" title="Nome do Produto" class="produto">
                            
                            <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                            <strong>
                                Arte dos Aromas - Sabonete Facial Esfoliante Copaiba Orgânico 110ml
                            </strong>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="bg">
                                <strong>
                                    R$35,80
                                </strong>
                                <span>
                                    ou em 10x de <strong>R$4,20</strong>
                                </span>
                                <i>Herbia</i>
                            </div>
                        </a>
                        <a href="produto.html" title="Nome do Produto" class="produto unavailable">
                            
                            <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                            <strong>
                                Arte dos Aromas - Sabonete Facial Esfoliante Copaiba Orgânico 110ml
                            </strong>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="bg">
                                <strong>
                                    R$35,80
                                </strong>
                                <span>
                                    ou em 10x de <strong>R$4,20</strong>
                                </span>
                                <i>Herbia</i>
                            </div>
                        </a>
                        <a href="produto.html" title="Nome do Produto" class="produto unavailable">
                            
                            <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                            <strong>
                                Arte dos Aromas - Sabonete Facial Esfoliante Copaiba Orgânico 110ml
                            </strong>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="bg">
                                <strong>
                                    R$35,80
                                </strong>
                                <span>
                                    ou em 10x de <strong>R$4,20</strong>
                                </span>
                                <i>Herbia</i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="produto-infos">

                    <div class="aval">
                        <h4>
                            Avaliações de quem comprou o produto
                        </h4>
                        <div class="nota">
                            3.5
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>(3)</span>
                        </div>

                        <div class="comment">
                            <strong>
                                Amei!
                            </strong>
                            <div class="grade">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="txt">
                                <p>
                                    Comprei para presentear minha filha e ela tá gostando muito do celular. Designer bem moderno, muito bonito o aparelho, a tela é arredondada nos cantos, processador rápido, não para jogos pesados. Tamanho muito bom da tela.
                                </p>
                                <em>
                                    NomeCliente
                                </em>
                            </div>
                        </div>


                        <div class="comment">
                            <strong>
                                Amei!
                            </strong>
                            <div class="grade">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="txt">
                                <p>
                                    Comprei para presentear minha filha e ela tá gostando muito do celular. Designer bem moderno, muito bonito o aparelho, a tela é arredondada nos cantos, processador rápido, não para jogos pesados. Tamanho muito bom da tela.
                                </p>
                                <em>
                                    NomeCliente
                                </em>
                            </div>
                        </div>

                        
                        <div class="comment">
                            <strong>
                                Amei!
                            </strong>
                            <div class="grade">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="txt">
                                <p>
                                    Comprei para presentear minha filha e ela tá gostando muito do celular. Designer bem moderno, muito bonito o aparelho, a tela é arredondada nos cantos, processador rápido, não para jogos pesados. Tamanho muito bom da tela.
                                </p>
                                <em>
                                    NomeCliente
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection


      {{-- Modal frete --}}
      @section('modal')
      <div class="formas-pgto">
            <div class="close">
                <i class="fa fa-window-close-o" aria-hidden="true"></i>
            </div>
            <strong>
                <i class="fa fa-usd" aria-hidden="true"></i> Formas de Pagamento
            </strong>
                <div class="tabs">
                    <ul class="buttons">
                        <li>
                            <a href="#cartao-de-credito" title="Cartão de Crédito" class="active">
                                <i class="fa fa-credit-card" aria-hidden="true"></i> Cartão de Crédito
                            </a>
                        </li>
                        <li>
                            <a href="#boleto" title="Boleto">
                                <i class="fa fa-barcode" aria-hidden="true"></i> Boleto
                            </a>
                        </li>
                        <li>
                            <a href="#debito" title="Debito">
                                <i class="fa fa-money" aria-hidden="true"></i> Debito
                            </a>
                        </li>
                        <li>
                            <a href="#bitcoin" title="Bitcoin">
                                <i class="fa fa-btc" aria-hidden="true"></i> Bitcoin
                            </a>
                        </li>
                    </ul>
                    <ul class="info">
                        <li id="cartao-de-credito" class="active">
                            <a href="#cartao-de-credito" title="Cartão de Crédito" class="btn-responsive">
                                <i class="fa fa-credit-card" aria-hidden="true"></i> Cartão de Crédito
                            </a>
                            <div class="txt">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>
                                                Parcelas
                                            </td>
                                            <td>
                                                Valor
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                2x de R$2300,00
                                            </td>
                                            <td>
                                                R$3500,00 (desconto de X%)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2x de R$2300,00
                                            </td>
                                            <td>
                                                R$3500,00 (desconto de X%)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2x de R$2300,00
                                            </td>
                                            <td>
                                                R$3500,00 (desconto de X%)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2x de R$2300,00
                                            </td>
                                            <td>
                                                R$3500,00 (desconto de X%)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2x de R$2300,00
                                            </td>
                                            <td>
                                                R$3500,00 (desconto de X%)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2x de R$2300,00
                                            </td>
                                            <td>
                                                R$3500,00 (desconto de X%)
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li id="boleto">
                            <a href="#boleto" title="Boleto" class="btn-responsive">
                                <i class="fa fa-barcode" aria-hidden="true"></i> Boleto
                            </a>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                </p>
                            </div>
                        </li>
                        <li id="debito">
                            <a href="#debito" title="Débito" class="btn-responsive">
                                <i class="fa fa-btc" aria-hidden="true"></i> Débito
                            </a>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                </p>
                            </div>
                        </li>
                        <li id="bitcoin">
                            <a href="#bitcoin" title="Bitcoin" class="btn-responsive">
                                <i class="fa fa-btc" aria-hidden="true"></i> Bitcoin
                            </a>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend mauris. Nulla id lectus rutrum, finibus tellus sit amet, consequat felis. Sed fringilla fermentum leo vel euismod. Cras convallis id enim eu malesuada. Vestibulum ultrices augue est, vel rhoncus lorem tristique sed. Vivamus ultricies commodo tellus eu facilisis. Nullam faucibus ipsum nibh, ut molestie orci elementum in. Sed sed venenatis libero. Cras at suscipit elit. Praesent sed pulvinar tortor.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            
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
                    <input name="type" id='sendFreteType' value='Econômico' type="hidden">
                    <tr id='pac'>
                        <td>
                            <span class='deadLineType' id='label-pac'>
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
                            <input class="frete_type" name="frete_type" id='pacRadio' type="radio">
                        </td>
                    </tr>


                    <tr id='sedex'>
                        <td>
                            <span class='deadLineType'>
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
                            <input class="frete_type" name="frete_type" id='sedexRadio' type="radio">
                        </td>
                    </tr>


                    <tr id='sedex10'>
                        <td>
                            <span class='deadLineType'>
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
                            <input class="frete_type" name="frete_type" id='s10Radio' type="radio">
                        </td>
                    </tr>
                </tbody>
              </form>
            </table>
        </div>
    </div>







    <div class="msgErro" style='display:none;'>
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
                    <input name="type" id='sendFreteType' value='Econômico' type="hidden">
                    <tr id='pac'>
                        <td>
                            <span class='deadLineType' id='label-pac'>
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
                            <input class="frete_type" name="frete_type" id='pacRadio' type="radio">
                        </td>
                    </tr>


                    <tr id='sedex'>
                        <td>
                            <span class='deadLineType'>
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
                            <input class="frete_type" name="frete_type" id='sedexRadio' type="radio">
                        </td>
                    </tr>


                    <tr id='sedex10'>
                        <td>
                            <span class='deadLineType'>
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
                            <input class="frete_type" name="frete_type" id='s10Radio' type="radio">
                        </td>
                    </tr>
                </tbody>
              </form>
            </table>
        </div>
    </div>
    @endsection
