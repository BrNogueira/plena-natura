
@extends('admin.layouts.app')

@section("content")

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=y3qwhx7dd59gllbzhzcodgqe5i0c2f7mbfft0etu2qehglrh"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<div class="col-md-10">
  <form method="POST">
    @csrf
    <h2> Fretes e prazos </h2>
   <textarea  name="content" required id="editor" rows="15">{{$content}}</textarea>

    <br />
    <div class="text-right">
            <a href="/admin/atendimento/departamentos" class="btn btn-primary">Voltar</a>
          <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
  </form>
</div>

@endsection
