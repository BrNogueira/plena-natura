
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
  <form method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input type="text" required name="name" class="form-control" id="inputEmail4" placeholder="Nome">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="text" required name="email" class="form-control" id="inputEmail4" placeholder="Email que vai receber as mensagens">
      </div>
    </div>

    <div class="text-right">
            <a href="/admin/atendimento/departamentos" class="btn btn-primary">Voltar</a>
          <button type="submit" class="btn btn-success">Novo departamento</button>
    </div>
  </form>
</div>

@endsection
