@extends('layout')

@section('title', 'Crie sua conta')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div>
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
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
            <h2>Criar Conta</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome Completo" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Informe seu Email" required>

                <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Criar Conta</button>
                    <div class="already-have-container">
                        <p><strong>Já possui uma conta?</strong></p>
                        <a href="{{ route('login') }}">Acessar Conta</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
            <h2>Junte-se à Elegance Bastos!</h2>
            <div class="spacer"></div>
            <p><strong>Rapido e Fácil</strong></p>
            <p>A criação de uma conta permitirá que você faça o compras mais rapidamente na Elegance Bastos, tendo fácil acesso ao histórico de pedidos e personalizando sua experiência de acordo com suas preferências.</p>

            &nbsp;
            <div class="spacer"></div>
            <a href="#"><p><strong>Politica de privacidade</strong></p></a>
            <p>A atualização e fornecimento correto dos dados no ato do cadastramento em nossa loja são de inteira responsabilidade do cliente. Se desejar, o cliente pode cancelar seu cadastro entrando em contato com nossa Central de Relacionamento.</p>
        </div>
    </div> <!-- end auth-pages -->
</div>
@endsection