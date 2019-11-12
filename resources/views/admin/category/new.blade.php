
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
  <form method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="inputEmail4">Nome</label>
        <input type="text" required name="name" class="form-control" id="inputEmail4" placeholder="Nome">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Situação</label>
        <select id="inputState" name="active" class="form-control">
          <option value='1' selected>Ativo</option>
          <option value='0'>Desativado</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="inputState">Cor</label>
        <select id="inputState" required name="color" class="form-control">
          <option value="0" selected disabled>Selecionar...</option>
          <option value="marcas">Vermelho</option>
          <option value="cabelos">Verde</option>
          <option value="maos">Azul</option>
          <option value="casa">Cinza</option>
          <option value="ofertas">Amarelo</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputIcon">Ícone</label>
        <input type="text" name="icon" required class="form-control" placeholder="fa fa-icon" id="inputIcon">
        <div class="pull-right">
            <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">(?)</a>
        </div>
      </div>
    </div>

    <div class="text-right">
            <a href="/admin/categorias" class="btn btn-primary">Voltar</a>
          <button type="submit" class="btn btn-success">Nova Categoria</button>
    </div>
  </form>
</div>

@endsection
