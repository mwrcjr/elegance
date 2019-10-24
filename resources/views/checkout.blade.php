@extends('layout')

@section('title', 'Finalizar')

@section('extra-css')

@endsection

@section('content')

    <div class="container">

        <h1 class="checkout-heading stylish-heading">Finalizar Compra</h1>
        <div class="checkout-section">
            <div>
                <form action="#">
                    <h2>Dados Pessoais</h2>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" id="address" name="address" value="">
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" value="">
                        </div>
                        <div class="form-group">
                            <label for="province">Estado</label>
                            <input type="text" class="form-control" id="province" name="province" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">CEP</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Realizar Pagamento</h2>
                <!--    <div class="form-group">
                        <label for="name_on_card">Nome no Cartão</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>

                    <div class="form-group">
                        <label for="cc-number">Numero do Cartão</label>
                        <input type="text" class="form-control" id="cc-number" name="cc-number" value="">
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="expiry">Data de vencimento do cartão</label>
                            <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/DD">
                        </div>
                        <div class="form-group">
                            <label for="cvc">Código de segurança</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" value="">
                        </div>
                    </div> --><!-- end half-form -->

                    

                    <!-- <button type="submit" class="button-primary full-width">CONFIRMAR A COMPRA</button> -->
                </form>
                <div class="spacer"></div>

                <form method="post" id="paypal-payment-form" action="#">
                        
                        <section>
                            <div class="bt-drop-in-wrapper">
                                <div id="bt-dropin"></div>
                            </div>
                        </section>

                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                        <button class="button-primary" type="submit"><span>Pague com PayPal</span></button>
                    </form>

            </div>



            <div class="checkout-table-container">
                <h2>Detalhes da Compra</h2>

                 <div class="checkout-table">
                    @foreach (Cart::content() as $item)
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="{{ asset('img/products/'.$item->model->slug.'.png') }}" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">{{ $item->model->name }}</div>
                                <div class="checkout-table-description">{{ $item->model->details }}</div>
                                <div class="checkout-table-price">{{ $item->model->presentPrice() }}</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">{{ $item->qty }}</div>
                        </div>
                    </div> <!-- end checkout-table-row -->
                    @endforeach



                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        <!-- Discount (10OFF - 10%) <br> -->
                        Frete <br>
                        <span class="checkout-totals-total">TOTAL</span>

                    </div>

                    <div class="checkout-totals-right">
                        R$ {{ Cart::subtotal() }} <br>
                        <!-- -$750.00 <br> -->
                        R$ {{ Cart::tax() }} <br>
                        <span class="checkout-totals-total">R$ {{ Cart::total() }}</span>

                    </div>
                </div> <!-- end checkout-totals -->

            </div>

        </div> <!-- end checkout-section -->
    </div>

@endsection
@section('extra-js')
    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color:  'black',
                shape:  'pill',
                label:  'pay',
                height: 40
            }

        }).render('#paypal-button-container');
    </script>
@endsection