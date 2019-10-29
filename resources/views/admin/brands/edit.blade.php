@extends('admin.layouts.app')
@section("content")
<div class="col-md-10">
    <script type="text/javascript">
        function alteraAction(valor) {
            if (valor == "jurídica") {





                $("#jurídica").html(
                    '<div class="item">    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" role="button" aria-expanded="false" aria-controls="exampleAccordion1" style="margin-left: 100px;" class="colland">      <span class="seta-baixo"></span> Exibir mais campos (Opcional)    </a>    <div id="exampleAccordion1" class="collapse.show" role="tabpanel" style="border-left: 1px solid grey">      <p class="mb-3">        <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">Tipo pessoa</label>            <select id="jurídica1" class="form-control form-control-sm col" name="tipo_pessoa" onChange="alteraAction(this.value)">   <option selected disabled>Selecionar..</option>           <option value="jurídica" selected>Jurídica</option>                <option value="física">Física</option>                          </select>        </div>        <div class="col">            <label for="1233" class="colland">CNPJ</label>            <input id="cnpj" type="text" class="form-control form-control-sm" placeholder="" value="{{$brand->cpf_cnpj}}" name="cnpj">        </div>        <div class="col-sm-5">            <label for="1233" class="colland">Indicador de inscrição estadual</label>            <select class="form-control form-control-sm" name="ind_insc_est">   <option selected disabled>Selecionar..</option>                <option value="0">Não contribuinte</option>                <option value="1">Contribuinte</option>                <option value="2">Contribuinte isento</option>          </select>        </div>      </div> <!-- fim da row 1 -->      <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">Razão Social</label>            <input type="text" class="form-control form-control-sm" value="{{$brand->social_reason}}"  placeholder="" name="razao_social">        </div>        <div class="col">            <label for="1233" class="colland">Inscrição Estadual</label>            <input type="text" class="form-control form-control-sm" placeholder="" value="{{$brand->state_registration}}" name="insc_estadual">        </div>       <div class="col">            <label for="1233"   class="colland">Inscrição Municipal</label>            <input type="text" value="{{$brand->city_registration}}" class="form-control form-control-sm" placeholder="" name="insc_municipal">        </div>        <div class="col">            <label for="1233" class="colland">Aniversário</label>            <input type="text" class="form-control form-control-sm" placeholder="" value="{{date("d/m/Y", strtotime($brand->birthday))}}" name="aniversario" id="birthday">        </div>      </div> <!-- fim da row 2 -->      <div class="row" style="margin-left: 50px;">        <div class="col-md-3">              <label for="1233" class="colland">Identificador estrangeiro</label>              <input type="text"  value="{{$brand->stranger_identity}}"  class="form-control form-control-sm" placeholder="" name="id_estrangeiro">        </div>     </div>      </p>    </div>  </div>'
                    );
                $('#cnpj').mask('00.000.000/0000-00');
            }

            if (valor == "física") {

                $("#jurídica").html(
                    '<div class="item"><a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion10" role="button" aria-expanded="false" aria-controls="exampleAccordion10" style="margin-left: 100px;" class="colland">      <span class="seta-baixo"></span> Exibir mais campos (Opcional)    </a>    <div id="exampleAccordion10" class="collapse.show" role="tabpanel" style="border-left: 1px solid grey">      <p class="mb-3">        <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">Tipo pessoa</label>            <select id="física1" class="form-control form-control-sm col" name="tipo_pessoa" onChange="alteraAction(this.value)">              <!-- OLHA AKI DPS -->      <option selected disabled>Selecionar..</option>             <option selected value="física">Física</option>                <option value="jurídica">Jurídica</option>          </select>        </div>        <div class="col">            <label for="1233" class="colland">CPF</label>            <input type="text" id="cpf" class="form-control form-control-sm" placeholder="" value="{{$brand->cpf_cnpj}}" name="cpf">        </div>        <div class="col-sm-5">            <label for="1233" class="colland">Indicador de inscrição estadual</label>            <select class="form-control form-control-sm" name="ind_insc_est">       <option selected disabled>Selecionar..</option>            <option value="0">Não contribuinte</option>                <option value="1">Contribuinte</option>                <option value="2">Contribuinte isento</option>          </select>        </div>  <div class="col">            <label for="1233" class="colland">Aniversário</label>            <input type="text" class="form-control form-control-sm" id="birthday" value="{{date("d/m/Y", strtotime($brand->birthday))}}" placeholder="" name="aniversario">        </div>      </div> <!-- fim da row 1 -->      <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">RG</label>            <input type="text" class="form-control form-control-sm" placeholder="" value="{{$brand->rg}}" name="rg">        </div>        <div class="col-md">              <label for="1233" class="colland">Identificador estrangeiro</label>              <input type="text" value="{{$brand->stranger_identity}}" class="form-control form-control-sm" placeholder="" name="id_estrangeiro">        </div>      </div> <!-- fim da row 2 -->      </p>    </div>  </div>'
                    );
                $('#cpf').mask('000.000.000-00');
            }

        }

    </script>
    <style type="text/css">
        .colland {
            font-size: 0.8em;
        }

    </style>
    <form method='POST'>

        <label for="1233">Nome</label>
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" id="1233" required placeholder="Nome do fornecedor"
                    value="{{$brand->name}}" name="name">
            </div>
            <div class="col-md-8"> </div>
            <div>
                <div id="jurídica" data-children=".item">
                    <!-- OLHA AKI TB-->
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1"
                            role="button" aria-expanded="false" aria-controls="exampleAccordion1"
                            style="margin-left: 100px;" class="colland" onClick="alteraAction('{{$brand->type}}')">
                            <span class="seta-baixo"></span> Exibir mais campos (Opcional)
                        </a>
                    </div>
                </div>
                <br>
                <!-- endereço -->
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2"
                            role="button" aria-expanded="false" aria-controls="exampleAccordion2" class="">
                            <span class="seta-baixo"></span> Informar endereço (Opcional)
                        </a>
                        <div id="exampleAccordion2" class="collapse" role="tabpane2"
                            style="border-left: 1px solid grey">
                            <p class="mb-3">
                                <div class="row" style="margin-left: 50px;">
                                    <div class="col">
                                        <label for="1233" class="colland">Cep</label>
                                        <input type="text" class="form-control form-control-sm" id="cep"
                                            value="{{$brand->cep}}" placeholder="" name="cep">
                                    </div>
                                    <div class="col">
                                        <label for="1233" class="colland">Endereço</label>
                                        <input type="text" class="form-control form-control-sm" id="street"
                                            value="{{$brand->street}}" placeholder="" name="endereco">
                                    </div>
                                    <div class="col">
                                        <label for="1233" class="colland">Número</label>
                                        <input type="text" class="form-control form-control-sm" id="number"
                                            value="{{$brand->number}}" placeholder="" name="numero">
                                    </div>
                                    <div class="col">
                                        <label for="1233" class="colland">Bairro</label>
                                        <input type="text" class="form-control form-control-sm" id="district"
                                            value="{{$brand->district}}" placeholder="" name="bairro">
                                    </div>
                                </div>
                                <!-- fim da row 1 -->
                                <div class="row" style="margin-left: 50px;">
                                    <div class="col">
                                        <label for="1233" class="colland">Complemento</label>
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            value="{{$brand->complements}}" name="complemento">
                                    </div>
                                    <div class="col">
                                        <label for="1233" class="colland">Cidade</label>
                                        <input type="text" class="form-control form-control-sm" id="city"
                                            value="{{$brand->city}}" placeholder="" name="cidade">
                                    </div>
                                </div>
                                <!-- fim da row 2 -->
                            </p>
                        </div>
                    </div>
                </div>
                <!-- até aqui -->
                <br />
                <!-- Contato -->
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3"
                            role="button" aria-expanded="false" aria-controls="exampleAccordion3" class="">
                            <span class="seta-baixo"></span> Informar contato (Opcional)
                        </a>
                        <div id="exampleAccordion3" class="collapse" role="tabpane3"
                            style="border-left: 1px solid grey">
                            <p class="mb-3">
                                <div class="row" style="margin-left: 50px;">
                                    <div class="col">
                                        <label for="1233" class="colland">Fone comercial</label>
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            value="{{$brand->comercial_phone}}" name="fone_comercial">
                                    </div>
                                    <div class="col">
                                        <label for="1233" class="colland">Email</label>
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            value="{{$brand->email}}" name="email">
                                    </div>
                                    <div class="col">
                                        <label for="1233" class="colland">Fone residencial</label>
                                        <input type="text" class="form-control form-control-sm" placeholder=""
                                            value="{{$brand->home_phone}}" name="fone_residencial">
                                    </div>
                                    <div class="col">
                                        <label for="1233" class="colland">Celular</label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="(00)00000-0000" value="{{$brand->phone}}" id="phone"
                                            name="celular">
                                    </div>
                                </div>
                                <!-- fim da row 1 -->
                            </p>
                        </div>
                    </div>
                </div>
                <!-- até aqui -->
                <br />
                <!-- Desc -->
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4"
                            role="button" aria-expanded="false" aria-controls="exampleAccordion4" class="">
                            <span class="seta-baixo"></span> Descrição (Opcional)
                        </a>
                        <div id="exampleAccordion4" class="collapse" role="tabpane4"
                            style="border-left: 1px solid grey">
                            <p class="mb-3">
                                <div class="row" style="margin-left: 50px;">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descrição</label>
                                        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"
                                            rows="3" cols="100">
                                          {{$brand->description}}
                                       </textarea>
                                    </div>
                                </div>
                                <!-- fim da row 1 -->
                            </p>
                        </div>
                    </div>
                </div>
                <!-- até aqui -->

                <!-- update Imagem -->
                <!-- <div id="exampleAccordion" data-children=".item">
                  <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4"role="button" aria-expanded="false" aria-controls="exampleAccordion4" class="">Imagem Logo</a>
                     <div id="exampleAccordion4" class="collapse" role="tabpane4"style="border-left: 1px solid grey">
                     <p class="mb-3">
                        <div class="row" style="margin-left:50px;">
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1">Imagem Logo</label>
                              <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"
                                 rows="3" cols="100">
                                 {{$brand->imagens}}
                              </textarea>
                           </div>
                        </div>
                     </p>
                     </div>

                </div> -->
                <br>
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion5" role="button" aria-expanded="false" aria-controls="exampleAccordion5"  class="">
                    <span class="seta-baixo">Imagem Logo (Opcional)</span>
                    </a>
                    <div id="exampleAccordion5" class="collapse" role="tabpane5" style="border-left: 1px solid grey">
                        <p class="mb-3">
                            <div class="row" style="margin-left: 50px;">
                                <div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                    </div>
                                    <img src="images/{{ Session::get('image') }}">
                                @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> Houve algum problema ao incluir a imagem.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form  class="form-control form-control-sm btn-success" action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" name="image" class="form-control ">
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>
                                    </div>
                                </form>                           
                                </div>
                            </div>
                        </p>
                    </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        {{csrf_field()}}
        <button class="btn btn-success botao_verde" type="submit" name="cadastrar_fabricante" value="1">Salvar</button>
    </form>
</div>
@endsection

@section("scripts")
<script type="text/javascript">
    $("#cep").mask("00000-000")
    $("#birthday").mask("00/00/0000")
    $(document).ready(function () {
        alteraAction('{{$brand->type}}');

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#street").val("");
            $("#district").val("");
            $("#city").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function () {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#street").val("...");
                    $("#district").val("...");
                    $("#city").val("...");



                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (
                    dados) {

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
