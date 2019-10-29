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
                <div class="editar-endereco">
                    <h2>
                        <i class="fa fa-home" aria-hidden="true"></i>Editar endereço
                    </h2>
                    @if($address)
                    <form method='POST'>
                        <label>
                            <span>
                                Destinatário
                            </span>
                            <input name='title' required type="text" value='{{$address->title}}'>
                        </label>
                        <label>
                            <span>
                                CEP
                            </span>
                            <input name='cep' id='cep' required type="text" value='{{$address->cep}}'>
                        </label>
                        <div class="half">
                            <label>
                                <span>
                                    Cidade
                                </span>
                                <input name='city' id='city' required type="text" value='{{$address->city}}'>
                            </label>
                            <label>
                                <span>
                                    Estado
                                </span>
                                <input name='state' id='state' required type="text" value='{{$address->state}}'>
                            </label>
                        </div>
                        <label>
                            <span>
                                Bairro
                            </span>
                            <input name='district' id='district' required type="text" value='{{$address->district}}'>
                        </label>
                        <div class="half">
                            <label>
                                <span>
                                    Rua
                                </span>
                                <input name='street' id='street' required type="text" value='{{$address->street}}'>
                            </label>
                            <label>
                                <span>
                                    Número
                                </span>
                                <input name='number' required type="text" value='{{$address->number}}'>
                            </label>
                        </div>
                        <label>
                            <span>
                                Complementos e referências
                            </span>
                            <input name='complements' type="text" value='{{$address->complements}}'>
                        </label>

                        <button type='submit'>
                            Salvar
                        </button>
                        @csrf
                    </form>
                    @else 
                       Esse endereço não existe ou não pertence a você
                    @endif
                </div>

            </article>

        </div>
    </section>

@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('js/address.js')}}">
</script>
<script type="text/javascript" >

    $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#street").val("");
            $("#district").val("");
            $("#city").val("");
            $("#state").val("");
        }
        
        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#street").val("...");
                    $("#district").val("...");
                    $("#city").val("...");
                    $("#state").val("...");
                    

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#street").val(dados.logradouro);
                            $("#district").val(dados.bairro);
                            $("#city").val(dados.localidade);
                            $("#state").val(dados.uf);
                            
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>
@endsection