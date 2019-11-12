<section class="container-menu closed">
        <div class="lft"></div>
        <div class="wrapper">
            <nav>
                <ul>
                    @foreach (menuItens() as $item )
                    <li class="{{$item->color}}">
                            <a href="/categoria/{{$item->slug}}" title="Marcas">
                                {{$item->name}}
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
                                                {{$item->name}}
                                            </strong>
                                            <span>
                                                Clique e confira nossa linha
                                            </span>
                                            
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="rgt"></div>
    </section>