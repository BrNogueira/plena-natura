@extends('layouts.app')

@section('content')
<section class="container-miolo margin-top">
    <div class="wrapper">
        <div class="head-central-antendimento">
            <h2>
                Central de Atendimento
            </h2>
            <strong>
                Navegue pelos links abaixo para tirar suas dúvidas e receber ajuda em suas compras!
            </strong>
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
                    <a href="/politica-de-privacidade" class="active" title="Política de Privacidade">
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
        
        <article class="form-atendimento">
            <h3>
                Fale Conosco
            </h3>
            <form method="POST" action='/atendimento'>
                {{ csrf_field() }}
                <label class="full">
                    <span>
                        Departamento
                    </span>
                    <select name='departments'>
                        @foreach ($departments as $dp )
                        <option value='{{$dp->email}}'>{{$dp->name}}</option>
                        @endforeach

                    </select>
                </label>
                <label>
                    <span>
                        Nome
                    </span>
                    <input name='name' required type="text">
                </label>
                <label>
                    <span>
                        E-mail
                    </span>
                    <input name='email' required type="email">
                </label>
                <label>
                    <span>
                        Telefone
                    </span>
                    <input name='phone' required type="text">
                </label>
                <label>
                    <span>
                        Número do pedido
                    </span>
                    <input name='order' type="text">
                </label>
                <label class="full">
                    <span>
                        Assunto
                    </span>
                    <input name='subject' required type="text">
                </label>
                <label class="full">
                    <span>
                        Mensagem
                    </span>
                    <textarea required name='msg'></textarea>
                </label>
                
                <button>
                    Enviar
                </button>
            </form>
        </article>
        <aside class="aside-atendimento">
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
                </a>
                <a href="#">
                    <i class="fa fa-skype" aria-hidden="true"></i>
                    <span>{{settings()->skype}}</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>{{settings()->email}}</span>
                </a>
            </p>
            
        </aside>
        
        
    </div>
</section>
@endsection