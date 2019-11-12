
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
         <form method="POST" onsubmit="return confirm('Deseja mesmo excluir?');" action="/admin/atendimento/departamentos/delete">
    <table class="table table-hover novo_table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($departments as $department)
                  <tr>
                    <th> <input type="checkbox" name="departments[]" value="{{$department->id}}"></th>
                    <td scope="row">{{$department->id}}</td>
                    <td><a href="/admin/atendimento/departamentos/editar/{{$department->id}}">{{$department->name}}</a></td>
                    <td>{{$department->email}}</td>
                  </tr>
              @endforeach
            </tbody>
      </table>
      <div class="pull-right">
          {{ $departments->links() }}
      </div>
</div>
<div class="col-md-2">
   <div class="col-md-2">
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link" href="/admin/atendimento/departamentos/novo">Incluir </a>
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
