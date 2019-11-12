
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
         <form method="POST" onsubmit="return confirm('Deseja mesmo excluir?');" action="/admin/fornecedores/delete">
    <table class="table table-hover novo_table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">SKU</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($brands as $brand)
                  <tr>
                    <th> <input type="checkbox" name="brands[]" value="{{$brand->id}}"></th>
                    <td scope="row">{{$brand->id}}</td>
                    <td><a href="/admin/fornecedores/editar/{{$brand->id}}">{{$brand->name}}</a></td>
                    <td>{{$brand->cpf_cnpj}}</td>
                    <td>{{$brand->phone}}</td>
                    <td>{{$brand->email}}</td>
                </tr>
              @endforeach
            </tbody>
      </table>
      <div class="pull-right">
         {{ $brands->links() }}
      </div>
</div>
<div class="col-md-2">
   <div class="col-md-2">
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link" href="/admin/fornecedores/novo">Incluir </a>
         </li>
         <li class="nav-item">

            <button type="submit" class="btn btn-link nav-link" name="excluir" value="1">Excluir </button>

         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Imprimir selecionados</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Exportar dados</a>
         </li>
      </ul>
   </div>
</div>
@csrf
    </form>
@endsection
