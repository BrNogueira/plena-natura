
@extends('admin.layouts.app')

@section("content")

  <style type="text/css">
      .colland {
      font-size: 0.8em;
      }
   </style>

<div class="col-md-10">
  <form method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input type="text" required name="name" class="form-control" value="{{$user->name}}"  required id="inputEmail4" placeholder="Nome">
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Sobrenome</label>
        <input type="text" required name="lastname" value="{{$user->lastname}}"  class="form-control" id="lastname" required placeholder="Sobrenome">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="email">Email</label>
        <input type="email" required name="email" value="{{$user->email}}"  class="form-control" id="email" required placeholder="email@email.com">
      </div>
    </div>
    <div class="col-md-8"> </div>
      <div>
         <div id="jurídica" data-children=".item">
            <!-- OLHA AKI TB-->
            <div class="item">
               <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" role="button" aria-expanded="false" aria-controls="exampleAccordion1" style="margin-left: 100px;" class="colland" onClick="alteraAction('física')">
               <span class="seta-baixo"></span> Exibir mais campos (Opcional)
               </a>
            </div>
         </div>
         <br>
         <!-- endereço -->

         @if($address)
         <div id="exampleAccordion" data-children=".item">
            <div class="item">
               <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" role="button" aria-expanded="false" aria-controls="exampleAccordion2"  class="">
               <span class="seta-baixo"></span> Informar endereço (Opcional)
               </a>
               <div id="exampleAccordion2" class="collapse" role="tabpane2" style="border-left: 1px solid grey">
                  <p class="mb-3">
                  <div class="row" style="margin-left: 50px;">
                     <div class="col">
                        <label for="1233" class="colland">Cep</label>
                        <input type="text" class="form-control form-control-sm" id="cep" placeholder="" value="{{$address->cep}}" name="cep">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Endereço</label>
                        <input type="text" class="form-control form-control-sm" id="street"  placeholder="" value="{{$address->street}}" name="endereco">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Número</label>
                        <input type="text" class="form-control form-control-sm" id="number"  placeholder="" value="{{$address->number}}" name="numero">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Bairro</label>
                        <input type="text" class="form-control form-control-sm" id="district"  placeholder="" value="{{$address->district}}" name="bairro">
                     </div>
                  </div>
                  <!-- fim da row 1 -->
                  <div class="row" style="margin-left: 50px;">
                     <div class="col">
                        <label for="1233" class="colland">Complemento</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" value="{{$address->complements}}" name="complemento">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Cidade</label>
                        <input type="text" class="form-control form-control-sm" id="city" placeholder="" value="{{$address->city}}"  name="cidade">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Estado</label>
                        <input type="text" class="form-control form-control-sm" id="state" placeholder="" value="{{$address->state}}"  name="estado">
                     </div>
                  </div>
                  <!-- fim da row 2 -->
                  </p>
               </div>
            </div>
         </div>
        @else

                  <div id="exampleAccordion" data-children=".item">
            <div class="item">
               <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" role="button" aria-expanded="false" aria-controls="exampleAccordion2"  class="">
               <span class="seta-baixo"></span> Informar endereço (Opcional)
               </a>
               <div id="exampleAccordion2" class="collapse" role="tabpane2" style="border-left: 1px solid grey">
                  <p class="mb-3">
                  <div class="row" style="margin-left: 50px;">
                     <div class="col">
                        <label for="1233" class="colland">Cep</label>
                        <input type="text" class="form-control form-control-sm" id="cep" placeholder="" name="cep">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Endereço</label>
                        <input type="text" class="form-control form-control-sm" id="street"  placeholder="" name="endereco">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Número</label>
                        <input type="text" class="form-control form-control-sm" id="number"  placeholder="" name="numero">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Bairro</label>
                        <input type="text" class="form-control form-control-sm" id="district"  placeholder=""  name="bairro">
                     </div>
                  </div>
                  <!-- fim da row 1 -->
                  <div class="row" style="margin-left: 50px;">
                     <div class="col">
                        <label for="1233" class="colland">Complemento</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" name="complemento">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Cidade</label>
                        <input type="text" class="form-control form-control-sm" id="city" placeholder=""   name="cidade">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Estado</label>
                        <input type="text" class="form-control form-control-sm" id="state" placeholder=""  name="estado">
                     </div>
                  </div>
                  <!-- fim da row 2 -->
                  </p>
               </div>
            </div>
         </div>
         
         @endif
         <!-- até aqui -->
         <br/>
         <!-- Contato -->
         <div id="exampleAccordion" data-children=".item">
            <div class="item">
               <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3" role="button" aria-expanded="false" aria-controls="exampleAccordion3"  class="">
               <span class="seta-baixo"></span> Informar contato (Opcional)
               </a>
               <div id="exampleAccordion3" class="collapse" role="tabpane3" style="border-left: 1px solid grey">
                  <p class="mb-3">
                  <div class="row" style="margin-left: 50px;">
                     <div class="col">
                        <label for="1233" class="colland">Fone comercial</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" value="{{$user->comercial_phone}}"  name="fone_comercial">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Fone residencial</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" value="{{$user->home_phone}}"  name="fone_residencial">
                     </div>
                     <div class="col">
                        <label for="1233" class="colland">Celular</label>
                        <input type="text" class="form-control form-control-sm" placeholder="(00)00000-0000" id="phone" value="{{$user->phone}}" name="celular">
                     </div>
                  </div>
                  <!-- fim da row 1 -->
                  </p>
               </div>
            </div>
         </div>
  
         <!-- até aqui -->
         <br/>
         <!-- Desc -->
         <div id="exampleAccordion" data-children=".item">
            <div class="item">
               <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4" role="button" aria-expanded="false" aria-controls="exampleAccordion4"  class="">
               <span class="seta-baixo"></span> Descrição (Opcional)
               </a>
               <div id="exampleAccordion4" class="collapse" role="tabpane4" style="border-left: 1px solid grey">
                  <p class="mb-3">
                  <div class="row" style="margin-left: 50px;">
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" cols="100">
                        {{$user->description}}
                          </textarea>
                     </div>
                  </div>
                  <!-- fim da row 1 -->
                  </p>
               </div>
            </div>
         </div>
         <!-- até aqui -->
      </div>
         {{csrf_field()}}
   <div class="text-right">
          <a href="/admin/clientes" class="btn btn-primary">Voltar</a>
          <button type="submit" class="btn btn-success">Salvar Cliente </button>
    </div>
   </div>

 </form>
</div>

@endsection


@section("scripts")
<script>
     function alteraAction(valor) {
        if (valor == "jurídica") {

            $("#jurídica").html('<div class="item">    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" role="button" aria-expanded="false" aria-controls="exampleAccordion1" style="margin-left: 100px;" class="colland">      <span class="seta-baixo"></span> Exibir mais campos (Opcional)    </a>    <div id="exampleAccordion1" class="collapse.show" role="tabpanel" style="border-left: 1px solid grey">      <p class="mb-3">        <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">Tipo pessoa</label>            <select id="jurídica1" class="form-control form-control-sm col" name="tipo_pessoa" onChange="alteraAction(this.value)">   <option selected disabled>Selecionar..</option>           <option value="jurídica" selected>Jurídica</option>                <option value="física">Física</option>                          </select>        </div>        <div class="col">            <label for="1233" class="colland">CNPJ</label>            <input id="cnpj" type="text" class="form-control form-control-sm" placeholder="" value="{{$user->cpf}}" name="cnpj">        </div>        <div class="col-sm-5">            <label for="1233" class="colland">Indicador de inscrição estadual</label>            <select class="form-control form-control-sm" name="ind_insc_est">   <option selected disabled>Selecionar..</option>                <option value="0">Não contribuinte</option>                <option value="1">Contribuinte</option>                <option value="2">Contribuinte isento</option>          </select>        </div>      </div> <!-- fim da row 1 -->      <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">Razão Social</label>            <input type="text" class="form-control form-control-sm" value="{{$user->social_reason}}"  placeholder="" name="razao_social">        </div>        <div class="col">            <label for="1233" class="colland">Inscrição Estadual</label>            <input type="text" class="form-control form-control-sm" placeholder="" value="{{$user->state_registration}}" name="insc_estadual">        </div>       <div class="col">            <label for="1233"   class="colland">Inscrição Municipal</label>            <input type="text" value="{{$user->city_registration}}" class="form-control form-control-sm" placeholder="" name="insc_municipal">        </div>        <div class="col">            <label for="1233" class="colland">Aniversário</label>            <input type="text" class="form-control form-control-sm" placeholder="" value="{{date("d/m/Y", strtotime($user->birthday))}}" name="aniversario" id="birthday">        </div>      </div> <!-- fim da row 2 -->      <div class="row" style="margin-left: 50px;">        <div class="col-md-3">              <label for="1233" class="colland">Identificador estrangeiro</label>              <input type="text"  value="{{$user->stranger_identity}}"  class="form-control form-control-sm" placeholder="" name="id_estrangeiro">        </div>     </div>      </p>    </div>  </div>');
              $('#cnpj').mask('00.000.000/0000-00');
        }

        if (valor == "física") {

            $("#jurídica").html('<div class="item"><a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion10" role="button" aria-expanded="false" aria-controls="exampleAccordion10" style="margin-left: 100px;" class="colland">      <span class="seta-baixo"></span> Exibir mais campos (Opcional)    </a>    <div id="exampleAccordion10" class="collapse.show" role="tabpanel" style="border-left: 1px solid grey">      <p class="mb-3">        <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">Tipo pessoa</label>            <select id="física1" class="form-control form-control-sm col" name="tipo_pessoa" onChange="alteraAction(this.value)">              <!-- OLHA AKI DPS -->      <option selected disabled>Selecionar..</option>             <option selected value="física">Física</option>                <option value="jurídica">Jurídica</option>          </select>        </div>        <div class="col">            <label for="1233" class="colland">CPF</label>            <input type="text" id="cpf" class="form-control form-control-sm" placeholder="" value="{{$user->cpf}}" name="cpf">        </div>        <div class="col-sm-5">            <label for="1233" class="colland">Indicador de inscrição estadual</label>            <select class="form-control form-control-sm" name="ind_insc_est">       <option selected disabled>Selecionar..</option>            <option value="0">Não contribuinte</option>                <option value="1">Contribuinte</option>                <option value="2">Contribuinte isento</option>          </select>        </div>  <div class="col">            <label for="1233" class="colland">Aniversário</label>            <input type="text" class="form-control form-control-sm" id="birthday" value="{{date("d/m/Y", strtotime($user->birthday))}}" placeholder="" name="aniversario">        </div>      </div> <!-- fim da row 1 -->      <div class="row" style="margin-left: 50px;">          <div class="col">            <label for="1233" class="colland">RG</label>            <input type="text" class="form-control form-control-sm" placeholder="" value="{{$user->rg}}" name="rg">        </div>        <div class="col-md">              <label for="1233" class="colland">Identificador estrangeiro</label>              <input type="text" value="{{$user->stranger_identity}}" class="form-control form-control-sm" placeholder="" name="id_estrangeiro">        </div>      </div> <!-- fim da row 2 -->      </p>    </div>  </div>');
      $('#cpf').mask('000.000.000-00');
        }

      }

 
 

$('#cpf').mask('000.000.000-00', {reverse: true});
$('#phone').mask('(00) 00000-0000', {reverse: true});


     $(document).ready(function() {
            alteraAction('{{$user->type}}');
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
        });s

</script>
@endsection
