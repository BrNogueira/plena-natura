@extends('layouts.app')

@section('content')
<!-- MIOLO -->
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

        <article class="info-central">
            <h3>
                A Empresa
            </h3>

            <div class="txt">
              {!! html_entity_decode($empresa->sobre)!!}
            </div>
        </article>

        <ul class="icons-items-central">
            <li>
                <strong>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    Atendimento Premium
                </strong>
                <p>
                    {{$empresa->premium}}
                </p>
            </li>
            <li>
                <strong>
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                    Postagem Expressa
                </strong>
                <p>
                        {{$empresa->expressa}}
                </p>
            </li>
            <li>
                <strong>
                    <i class="fa fa-money" aria-hidden="true"></i>
                    Descontos Especiais
                </strong>
                <p>
                        {{$empresa->descontos}}
                </p>
            </li>
        </ul>

    </div>
</section>

@endsection
