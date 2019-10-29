
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
         <form method="POST" onsubmit="return confirm('Deseja mesmo excluir?');" action="/admin/clientes/delete">
    <table class="table table-hover novo_table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">SKU</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                  <tr>
                    <th> <input type="checkbox" name="users[]" value="{{$user->id}}"></th>
                    <td scope="row">{{$user->id}}</td>
                    <td><a href="/admin/clientes/editar/{{$user->id}}">{{$user->name}}</a></td>
                    <td>{{$user->cpf}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                  </tr>
              @endforeach
            </tbody>
      </table>
      <div class="pull-right">
          {{ $users->links() }}
      </div>
</div>
<div class="col-md-2">
   <div class="col-md-2">
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link" href="/admin/clientes/novo">Incluir </a>
         </li>
         <li class="nav-item">

            <button type="submit"  class="btn btn-link nav-link" name="excluir" value="1">Excluir </button>

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
