@extends('layouts.app')

@section('content')
<section class="container-banner margin-top">
    <div class="wrapper">
         <H1>Página para teste.</h1>
    </div>
</section>

<section class="container-news">
    <div class="wrapper">
        <div class="pad">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <span><strong>Altere</strong> o link do facebook</span>

                <form method='POST' action='/alterarlink/1'>
                {{csrf_field()}}
                    <input type="text" name='email' value='{{socialLink('facebook')}}' placeholder="Link">
                    <button type='submit'>Alterar link!</button>
                </form>
        </div>
    </div>
</section>
<section class="container-news">
    <div class="wrapper">
        <div class="pad">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <span><strong>Altere</strong> o link do instagram</span>

                <form method='POST' action='/alterarlink/4'>
                {{csrf_field()}}
                    
                    <input type="text" name='email' value='{{socialLink('instagram')}}' placeholder="Link">
                    <button type='submit'>Alterar Link!</button>
                </form>
        </div>
    </div>
</section>
<section class="container-news">
    <div class="wrapper">
        <div class="pad">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <span><strong>Altere</strong> o link do twitter</span>

                <form method='POST' action='/alterarlink/2'>
                {{csrf_field()}}
                    <input type="text" name='email' value='{{socialLink('twitter')}}' placeholder="Link">
                    <button type='submit'>Alterar link!</button>
                </form>
        </div>
    </div>
</section>
<section class="container-news">
    <div class="wrapper">
        <div class="pad">
            <i class="fa fa-wordpress" aria-hidden="true"></i>
            <span><strong>Altere</strong> o link do wordpress</span>

                <form method='POST' action='/alterarlink/3'>
                {{csrf_field()}}
                    <input type="text" name='email' value='{{socialLink('blog')}}' placeholder="Link">
                    <button type='submit'>Alterar link!</button>
                </form>
        </div>
    </div>
</section>
<section class="container-banner">
    <div class="wrapper">

    </div>
</section>

@endsection