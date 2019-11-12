
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
         <form method="POST" onsubmit="return confirm('Deseja mesmo excluir?');" action="/admin/produtos/delete">
    <table class="table table-hover novo_table">
            <thead>
              <tr>
               <th scope="col">#</th>
                <th scope="col">SKU</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Ativo</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
                  <tr>
                    <th> <input type="checkbox" name="products[]" value="{{$product->id}}"></th>
                    <td scope="row">{{$product->id}}</td>
                    <td><a href="/admin/produtos/editar/{{$product->id}}">{{$product->name}}</a></td>
                    <td>R${{money($product->price)}}</td>
                    <td>@if($product)
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
          {{ $products->links() }}
      </div>
</div>
<div class="col-md-2">
   <div class="col-md-2">
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link" href="/admin/produtos/novo">Incluir </a>
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
