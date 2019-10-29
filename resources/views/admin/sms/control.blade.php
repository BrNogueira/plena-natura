
@extends('admin.layouts.app')

@section("content")
<div class="col-md-10" style="background-color: #fff; border: 1px solid #ccc; border-radius: 3px; padding: 5px;">

  <div class='app'>
      <form method='POST'>
          <center>
            <label>
              <input type="checkbox"  name="on" id="" value="1" {{$sms_on ? 'checked' : ''}}>
              Módulo ativo
            </label> <br />
          </center>

          <label for="fname">LOGIN</label>
          <input type="text" value='{{$sms_login}}' name="login" >

          <label for="lname">TOKEN</label>
          <input type="text" value='{{$sms_token}}' name="token">


          <input type="submit" value="Salvar">

          @csrf
      </form>
  </div>
</div>
<div class="col-md-2">
   <div class="col-md-2">
     <h2>Módulos</h2>
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link" href="">SMS </a>
         </li>
         <li class="nav-item">
            <button type="submit" class="btn btn-link nav-link" name="excluir" value="1">MODULO#2 </button>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">MÓDULO#3</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">MÓDULO#4</a>
         </li>
      </ul>
   </div>
</div>
@endsection



    <style>


    .app {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px 20px;
        border-radius: 4px;
    }
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
    </style>
