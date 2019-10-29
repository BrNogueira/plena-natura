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
                    <a href="/meus-enderecos"  title="Meus Endereços">
                        <i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Meus Endereços
                    </a>
                </li>
                <li>
                    <a href="/dados-pessoais" class="active" title="Dados Pessoais">
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
            <div class="dados-pessoais">
                <h2>
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>Dados Pessoais
                </h2>

                <form method='POST'>
                    <label>
                        <span>
                            Nome
                        </span>
                        <input type="text" required name='name' value='{{\Auth::user()->name}}'>
                    </label>
                    <label>
                        <span>
                            Sobrenome
                        </span>
                        <input type="text" required name='lastName' value='{{\Auth::user()->lastname}}'>
                    </label>
                    <label>
                        <span>
                            CPF
                        </span>
                        <input type="text" required name='cpf' id='cpf' value='{{\Auth::user()->cpf}}'>
                    </label>
                    <label>
                        <span>
                            Celular
                        </span>
                        <input type="text" name='phone' id='phone' value='{{\Auth::user()->phone}}'>
                    </label>
                    <button type='submit'>
                        Salvar
                    </button>
                    @csrf
                </form>
            </div>

        </article>

    </div>
</section>

@endsection

@section('scripts')
<script>
$("#phone").mask("(00) 000000009");
$("#cpf").mask('000.000.000-00', {reverse: true});
</script>
@endsection