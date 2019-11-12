@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
  <form method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Nome</label>
        <input type="text" required name="name" class="form-control" id="inputEmail4" value="{{$settings->name}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">Email</label>
        <input type="email" required name="email" class="form-control" id="inputEmail4" value="{{$settings->email}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">CNPJ</label>
        <input type="text" required name="cnpj" class="form-control" id="cnpj" value="{{$settings->cnpj}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">Endereço</label>
        <input type="text" required name="address" class="form-control" id="inputEmail4" value="{{$settings->address}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">CEP</label>
        <input type="text" required name="cep" class="form-control" id="cep" value="{{$settings->cep}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">Skype</label>
        <input type="text" required name="skype" class="form-control" id="inputEmail4" value="{{$settings->skype}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">Dia e hora de atendimento</label>
        <input type="text" required name="attendance" class="form-control" id="inputEmail4" value="{{$settings->atendimento}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">Telefone</label>
        <input type="text" required name="phone" class="form-control" id="phone"  value="{{$settings->phone}}">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">WhatsApp</label>
        <input type="text" required name="whatsapp" class="form-control" id="whatsapp"  value="{{$settings->whatsapp}}">
      </div>
    </div>
    <div class="text-right">
      <button type="submit" class="btn btn-success">Salvar</button>
    </div>
  </form>
</div>

@endsection

@section('scripts')
<script>
$('#cnpj').mask('00.000.000/0000-00');
$('#phone').mask('(00) 0000-0009');
$('#whatsapp').mask('(00) 00000-0009');
$('#cep').mask('00000-000');
</script>
@endsection
