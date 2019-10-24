<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Elegance Bastos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header class="with-background">
            <div class="top-nav container">
                <div class="logo">Roupas, Calçados e Acessórios</div>
                <ul>
                    <li><a href="{{ route('shop.index') }}">Comprar</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Blog</a></li>
                    <li>
                        <a href="{{ route('cart.index') }}">Carrinho <span class="cart-count">
                            @if (Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span></span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div> <!-- end top-nav -->
            <div class="hero container">
                <div class="hero-copy">
                    <h1>ELEGANCE BASTOS</h1>
                    <p>Loja e distribuidora de roupas e acessorios masculinos e femininos.</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Botão 1</a>
                        <a href="#" class="button button-white">Botão 2</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/logo-eb-grande.png" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Nossos Produtos</h1>

                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Lançamentos</a>
                    <a href="#" class="button">Promoções</a>
                </div>

                {{-- <div class="tabs">
                    <div class="tab">
                        Lançamentos
                    </div>
                    <div class="tab">
                        Promoções
                    </div>
                </div> --}}

                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="product">
                             <a href="{{ route('shop.show', $product->slug) }}"><img src="/img/products/{{$product->slug}}.png" alt="product"></a>
                            <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                            <div class="product-price">{{ $product->presentPrice() }}</div>
                        </div>
                    @endforeach   
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button">Veja mais produtos da Elegance</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Blog Elegance</h1>

                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="/img/blog1.png" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="/img/blog2.png" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="/img/blog3.png" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        @include('partials.footer')


    </body>
</html>
