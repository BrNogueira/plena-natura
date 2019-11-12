
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">

   <table class="table table-hover novo_table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Estoque</th>
                <th scope="col">Ativo</th>
              </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
              <tr>
                <th><input type="checkbox" name="produto[]" value="{{$product->id}}"></th>
                <td scope="row">{{$product->id}}</td>
                <td><a href="/admin/produtos/editar/{{$product->id}}">{{$product->name}}</a></td>
                <td>R${{money($product->price)}}</td>
                <td>Qnt: {{$product->stock}}
                </td>
                
                <td>@if($product)
                     <span class="badge badge-pill badge-success">Ativo</span></td>
                     @else
                     <span class="badge badge-pill badge-danger">Desativado</span>
                      @endif
                  </tr>
            @endforeach
            </tbody>
      </table>
</div>
<div class="col-md-2">
   <div class="col-md-2">
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link" href="">Incluir </a>
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
@endsection
