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
                    <a href="/dados-pessoais" title="Dados Pessoais">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Dados Pessoais
                    </a>
                </li>
                <li>
                    <a href="/dados-cadastrais" class="active" title="Dados Cadastrais">
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
            <div class="dados-cadastrais">
                <h2>
                    <i class="fa fa-lock" aria-hidden="true"></i>Dados Cadastrais
                </h2>

                <form method='post' action='/dados-cadastrais/email'>
                    <label>
                        <span>
                            E-mail Cadastrado
                        </span>
                    <input type="email" name='email' value='{{\Auth::user()->email}}'>
                    </label>
                    <label>
                        <span>
                            Novo e-mail
                        </span>
                        <input type="email" name='newEmail'>
                    </label>
                    <div class="full">
                        <button type='submit'>
                            Salvar
                        </button>
                    </div>
                    @csrf
                </form>
                <form method='POST' action="/dados-cadastrais/senha">
                    <label>
                        <span>
                            Nova senha
                        </span>
                        <input id='password' required type="password" name='password'>
                    </label>
                    <label>
                        <span>
                            Confirmar nova senha
                        </span>
                        <input id='confirm_password' required type="password" name='confirmPassword'>
                        <span id='message'></span>
                    </label>

                    <div class="full">
                        <button disabled type='submit' id='submitButton'>
                            Salvar
                        </button>
                    </div>
                    @csrf
                </form>
            </div>

        </article>

    </div>
</section>

@endsection


@section('scripts')
<script type="text/javascript">
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Ok').css('color', 'green');
    document.getElementById("submitButton").disabled = true;
  } else 
    $('#message').html('Senha incorreta').css('color', 'red');
    document.getElementById("submitButton").disabled = false;
});
</script>
@endsection