@extends('layout')
@section('title', 'Recuperar Senha')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
            @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2>Esqueceu a sua senha?</h2>
            <div class="spacer"></div>
            <form action="{{ route('password.email') }}" method="POST">
                {{ csrf_field() }}
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Seu Email" required autofocus>
                <div class="login-container">
                    <button type="submit" class="auth-button">Enviar Link de Recuperação</button>
                </div>

            </form>
        </div>
        <div class="auth-right">
            <h2>Recuperação de senha</h2>
            <div class="spacer"></div>
            <p>Caso não se lembre da sua senha de acesso, use a recuparação de senha para continuar acessando sua conta da Elegance Bastos.</p>
            <div class="spacer"></div>
            <p>Informe seu e-mail cadastrado no campo indicado e clique em enviar link de recuperação. Você receberá um e-mail com as informaçoes necessárias para recuperar seu acesso.</p>
        </div>
    </div>
</div>
@endsection