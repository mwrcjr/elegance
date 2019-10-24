@extends('layout')

@section('title', 'Produtos')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Início</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Comprar</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>Filtrar por Categorias</h3>
            <ul>
                <li><a href="#">Camisetas</a></li>
                <li><a href="#">Camisa de time</a></li>
                <li><a href="#">Bonés</a></li>
                <li><a href="#">Oculos de Sol</a></li>
                <li><a href="#">Moda Feminina</a></li>
                <li><a href="#">Moda Social</a></li>
                <li><a href="#">Acessórios</a></li>
            </ul>

            <h3>Filtrar por Preço</h3>
            <ul>
                <li><a href="#">até R$ 100</a></li>
                <li><a href="#">de R$ 100 a R$ 500</a></li>
                <li><a href="#">acima de R$ 500</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <h1 class="stylish-heading">Camisa de time</h1>
            <div class="products text-center">

                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.png') }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach
                
            </div> <!-- end products -->
        </div>
    </div>


@endsection