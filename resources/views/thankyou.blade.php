@extends('layout')

@section('title', 'Obrigado!')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="thank-you-section">
       <h1>Compra realizada com sucesso! <br>Agradecemos a preferência.</h1>
       <p>Todos os dados da compra foram enviados ao seu e-mail! Atenciosamente...</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button">Elegance Bastos</a>
       </div>
   </div>




@endsection