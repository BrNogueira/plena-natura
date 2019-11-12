@extends('admin.layouts.app')
@section("content")
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=y3qwhx7dd59gllbzhzcodgqe5i0c2f7mbfft0etu2qehglrh"></script>
<script>tinymce.init({ selector:'#editor' });</script>
<div class="col-md-10">
   <form method="POST">
      @csrf
      <h2> A empresa </h2>
      <textarea  name="about" required id="editor" rows="15">{{$company->sobre}}</textarea>
      <br />
      <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Atendimento Premium</label>
        <textarea class="form-control" name="premium" required id="exampleFormControlTextarea1" placeholder="Resposta da dúvida" rows="5">{{$company->premium}}</textarea>
      </div>
      <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Postagem Expressa</label>
        <textarea class="form-control" name="express" required id="exampleFormControlTextarea1" placeholder="Resposta da dúvida" rows="5">{{$company->expressa}}</textarea>
      </div>
      <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Descontos Especiais</label>
        <textarea class="form-control" name="discounts" required id="exampleFormControlTextarea1" placeholder="Resposta da dúvida" rows="5">{{$company->descontos}}</textarea>
      </div>
      <div class="text-right">
         <a href="/admin/atendimento/departamentos" class="btn btn-primary">Voltar</a>
         <button type="submit" class="btn btn-success">Atualizar</button>
      </div>
   </form>
</div>
@endsection
