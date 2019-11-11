@extends('layout')

@section('title', 'Resultados da Busca')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
    <style type="text/css">
        .searchtable-img {
            max-width: 96px;
            max-height:96px;
            width: auto;
            height: auto;
            display:inline-block;
            border:2px solid gray;
        }
        .searchtable {
            clear: both;
            margin-top: 8px;
        }
        img {
            vertical-align: top
        }
    </style>
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Início</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Busca</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="search-results-container container">
        <h1>Resultado(s) encontrado(s)</h1>
        <p class="search-results-count">Há {{ $products->total() }} produto(s) encontrado(s) na busca por '{{ request()->input('query') }}'</p>

        @if ($products->total() > 0)
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Produto</th>
                    <th>Detalhes</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>
                            <a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
                        </th>
                        <td>
                            <div class="searchtable">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="item" class="searchtable-img"></a>
                            </div>
                        </td>
                        <td>{{ str_limit($product->details, 70) }}</td>
                        <td>{{ $product->presentPrice() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->appends(request()->input())->links() }}
        @endif
    </div> <!-- end search-results-container -->

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection