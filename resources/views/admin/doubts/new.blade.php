
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10">
  <form method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Dúvida</label>
        <input type="text" required name="question" class="form-control" id="inputEmail4" placeholder="Dúvida">
      </div>
      <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Resposta</label>
        <textarea class="form-control" name="answer" required id="exampleFormControlTextarea1" placeholder="Resposta da dúvida" rows="5"></textarea>
      </div>




    </div>

    <div class="text-right">
            <a href="/admin/ajuda/duvidas" class="btn btn-primary">Voltar</a>
          <button type="submit" class="btn btn-success">Nova dúvida</button>
    </div>
  </form>
</div>

@endsection
