
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
         <form method="POST" onsubmit="return confirm('Deseja mesmo excluir?');" action="/admin/categorias/delete">
    <table class="table table-hover novo_table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col">Icone</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
                  <tr>
                    <th> <input type="checkbox" name="categories[]" value="{{$category->id}}"></th>
                    <td scope="row">{{$category->id}}</td>
                    <td><a href="/admin/categorias/editar/{{$category->id}}">{{$category->name}}</a></td>
                    <td><i class="{{$category->icon}}"></i></td>
                    <td>@if($category->active)
                          <span class="badge badge-pill badge-success">Ativo</span>
                      @else
                         <span class="badge badge-pill badge-danger">Desativado</span>
                      @endif
                    </td>
                  </tr>
              @endforeach
            </tbody>
      </table>
      <div class="pull-right">
          {{ $categories->links() }}
      </div>
</div>
<div class="col-md-2">
   <div class="col-md-2">
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link" href="/admin/categorias/novo">Incluir </a>
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
