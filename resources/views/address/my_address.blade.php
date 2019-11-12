@extends('layouts.app')

@section('content')

<section class="container-miolo margin-top user-area">
        <div class="wrapper">

            <aside class="user-area-menu">
                <strong>
                Olá, {{Auth::user()->name}}<br>
                    <em>
                            {{Auth::user()->email}}
                    </em>
                </strong>
                <a class="logout" title="Sair" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
                <ul>
                    <li>
                        <a href="/meus-pedidos" title="Meus Pedidos">
                            <i class="fa fa-truck" aria-hidden="true"></i>&nbsp;&nbsp;Meus Pedidos
                        </a>
                    </li>
                    <li>
                        <a href="/meus-enderecos" class="active" title="Meus Endereços">
                            <i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Meus Endereços
                        </a>
                    </li>
                    <li>
                        <a href="/dados-pessoais" title="Dados Pessoais">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Dados Pessoais
                        </a>
                    </li>
                    <li>
                        <a href="/dados-cadastrais" title="Dados Cadastrais">
                            <i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;Dados Cadastrais
                        </a>
                    </li>
                    <li>
                        <a href="/minhas-avaliacoes" title="Minhas Avaliações">
                            <i class="fa fa-star" aria-hidden="true"></i>&nbsp;&nbsp;Minhas Avaliações
                        </a>
                    </li>
                    <li>
                        <a href="/meus-vales" title="Meus Vales">
                            <i class="fa fa-ticket" aria-hidden="true"></i>&nbsp;&nbsp;Meus Vales
                        </a>
                    </li>
                </ul>
            </aside>

            <article>
                <div class="meus-enderecos">
                    <h2>
                        <i class="fa fa-home" aria-hidden="true"></i>Meus Endereços
                    </h2>

                    <ul>
                        @foreach ($address as $ad)
                        <li>
                                <div class="btns">
                                <a href="/meus-enderecos/editar/{{$ad->id}}" title="Editar">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="/address/delete/{{$ad->id}}" onclick="return confirm('Tem certeza que desea excluir?')" title="Excluir">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <strong>
                                    {{$ad->title}}
                                </strong>
                                <p>
                                    {{$ad->street}}, {{$ad->number}} 
                                    @if($ad->complements != '')
                                     {{$ad->complements}}
                                    @endif
                                    <br>
                                    {{$ad->cep}} - {{$ad->district}}<br>
                                    {{$ad->city}} - {{$ad->state}}
                                </p>
                                <label>
                                    @if ($ad->main == 1)
                                <input checked name='mainButton' value='{{$ad->id}}' type="radio"> <span>Selecionar como principal</span>
                                    @else
                                    <input  name='mainButton' value='{{$ad->id}}' type="radio"> <span>Selecionar como principal</span>
                                    @endif
                                </label>
                            </li>
                        @endforeach
                        <li>
                            <a href="/meus-enderecos/novo" title="Adicionar Novo Endereço">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <span>Novo Endereço</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </article>

        </div>
    </section>

@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('js/address.js')}}">
</script>
@endsection