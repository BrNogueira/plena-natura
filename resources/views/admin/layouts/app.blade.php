<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/admin/style.css')}}">
          <link rel="icon" href="{{asset('images/favicon.png')}}" >
      <!-- Google Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <!-- max -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
      <!-- select2 -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
      <!-- font -->
      <!-- for minified version add this -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('fonts/admin/fonts.min.css')}}" />
      <title>Administrador - Plena Natura</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg ">
         <a class="navbar-brand" href="?link=1"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justified">
               <li class="nav-item">
                  <a class="nav-link" href="/admin">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/admin/categorias">Categorias</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/admin/produtos">Produtos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/admin/fornecedores">Fornecedores</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/admin/clientes">Clientes</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Ajuda
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/admin/atendimento/departamentos">Departamentos</a>
                    <a class="dropdown-item" href="/admin/ajuda/empresa">A empresa</a>
                    <a class="dropdown-item" href="/admin/ajuda/duvidas">Dúvidas</a>
                    <a class="dropdown-item" href="/admin/ajuda/fretes-e-prazos">Fretes e prazos</a>
                    <a class="dropdown-item" href="/admin/ajuda/politica-de-troca">Política de troca</a>
                    <a class="dropdown-item" href="/admin/ajuda/politica-de-privacidade">Política de privacidade</a>
                  </div>
              </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gear"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/admin/sms">SMS</a>
                    <a class="dropdown-item" href="/admin/configuracoes">Configurações</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.logout')}}">Deslogar</a>
                  </div>
              </li>
            </ul>
         </div>
      </nav>
      <br/>
      <div class="container">
        @if(session('success'))
           @component('admin.components.alert',['type' => 'success',  'msg' => session('msg')])
           @endcomponent
       @endif

        @if($errors->any())
           @component('admin.components.alert',['type' => 'danger', 'msg' => $errors->first('msg')])
           @endcomponent
        @endif
      <br/>
      <div class="row" >
        @yield("content")
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>

      @yield('scripts')
   </body>
</html>
