@extends('layouts.app')

@section('content')

      <!--COLOCAR A CLASSE DA CATEGORIA PARA OS ICONES ASSUMIREM A COR, ASSIM COMO NA HOME -->
      <section class="container-miolo margin-top {{$category->color}}">
        <div class="wrapper">
            <aside class="filter closed">
                <div class="pad">
                    <strong>
                        <i class="fa fa-filter" aria-hidden="true"></i>&nbsp;&nbsp;Meu Filtro
                    </strong>
                    <ul class="filt-options">
                        <li>
                            <a href="#" class="delete-filter">
                                <i class="fa fa-window-close" aria-hidden="true"></i>
                            </a>
                            <b>Marca:</b> Arte dos Aromas
                        </li>
                    </ul>
                </div>
                <div class="pad mt">
                    <h2>
                    <i class="{{$category->icon}}" aria-hidden="true"></i>&nbsp;&nbsp;{{$category->name}}
                    </h2>

                    <form>

                        <strong>
                            Sub-Categoria
                        </strong>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>



                        <strong>
                            Marca
                        </strong>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>
                        <label>
                            <input type="checkbox"> <span>Sub-Categoria</span>
                        </label>



                        <strong>
                            Preço
                        </strong>
                        <div id="slider" class="price-bar">
                            
                        </div>
                        <label class="values">
                            <input type="text" value="R$0,00">
                            <input type="text" value="R$300,00">
                        </label>
                    </form>
                </div>
            </aside>
            <article class="list-prods">
                <div class="pad">
                    <h2>
                        <i class="{{$category->icon}}" aria-hidden="true"></i>&nbsp;&nbsp;{{$category->name}}
                    </h2>
                    <div class="filter-ico closed">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                    </div>

                    <div class="filter filter-mob closed">
                      

                    </div>
                    <form class="list-flt">
                        <select id='classificar'>
                            <option value='name'>Classificar por</option>
                            <option value='name'> Nome</option>
                            <option value='id'> Lançamentos </option>
                            <option value='clicks'> Mais Acessados </option>
                        </select>
                        <div class="arrows">
                            <a href="#" class="ant"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></a>
                            <a href="#" class="prox"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
                        </div>
                        <label>
                            <span>
                                Página
                            </span>
                            <select name='paginate' id='paginate'>
                                <option selected>{{($products->currentPage() < 10) ?  '0'.$products->currentPage() : $products->currentPage()}}</option>
                                @for ($i = 1 ; $i <= $products->lastPage() ; $i++)
                                    @if ($products->currentPage() != $i)
                                    
                                    <option value='{{$i}}'>{{($i < 10) ?  '0'.$i : $i}}</option>
                                    @endif
                                   
                                @endfor
                            </select>
                        <span>de {{($products->lastPage() < 10) ?  '0'.$products->lastPage() : $products->lastPage()}}</span>
                        </label>
                    </form>

                    <div class="vitrine">
                        @if(!$products->isEmpty())
                        @foreach ($products as $item)
                           <a href="/produto/{{$item->slug}}" title="Nome do Produto" class="produto">
                            
                                <img src="{{asset('images/produto.jpg')}}" alt="{{$item->name}}">
                                <strong>
                                        {{$item->name}}
                                </strong>
                                <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="bg">
                                    <strong>
                                        R${{money($item->price)}}
                                    </strong>
                                    <span>
                                       ou em 10x de <strong>R${{money($item->price / 10)}}</strong>
                                    </span>
                                    <i>Herbia</i>
                                </div>
                            </a>
                        @endforeach


                    </div>
                    <form class="list-flt">
                            <select id='classificar'>
                                <option value='name'>Classificar por</option>
                                <option value='name'> Nome</option>
                                <option value='id'> Lançamentos </option>
                                <option value='clicks'> Mais Acessados </option>
                            </select>
                            <div class="arrows">
                                <a href="#" class="ant"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></a>
                                <a href="#" class="prox"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
                            </div>
                            <label>
                                <span>
                                    Página
                                </span>
                                <select name='paginate' id='paginate'>
                                    <option selected>{{($products->currentPage() < 10) ?  '0'.$products->currentPage() : $products->currentPage()}}</option>
                                    @for ($i = 1 ; $i <= $products->lastPage() ; $i++)
                                        @if ($products->currentPage() != $i)
                                        
                                        <option value='{{$i}}'>{{($i < 10) ?  '0'.$i : $i}}</option>
                                        @endif
                                       
                                    @endfor
                                </select>
                            <span>de {{($products->lastPage() < 10) ?  '0'.$products->lastPage() : $products->lastPage()}}</span>
                            </label>
                        </form>    
                        @else 
                        Não encontramos nenhum produto
                     @endif
                </div>
            </article>  

        </div>
    </section>

    @endsection

@section('scripts')
<script src="{{asset('js/nouislider.min.js')}}"></script>

<script type="text/javascript">
    var slider = document.getElementById('slider');

    noUiSlider.create(slider, {
        start: [0, 100],
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });

    function replaceQueryParam(param, newval, search) {
    var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
    var query = search.replace(regex, "$1").replace(/&$/, '');

    return (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval : '');
    }
    
    function makeLink(param, newval){
       var str = window.location.search
       str = replaceQueryParam(param, newval, str)
       window.location = window.location.pathname + str
    }

    $('.prox').on('click', function(){
        makeLink('page', {{$products->currentPage()}} + 1);
    });

    $('.ant').on('click', function(){
        makeLink('page', {{$products->currentPage()}} - 1);
    });

    $("#paginate").on('change', function(){
        makeLink('page', $("#paginate").val());
    });

    $("#classificar").on('change', function(){
        makeLink('order', $("#classificar").val());
    });
</script>
@endsection