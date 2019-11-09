@component('mail::message')
# Pedido Recebido Com Sucesso!

Obrigado por comprar conosco.

**ID do pedido:** #{{ $order->id }}

**Pedido feito por:** {{ $order->billing_name }}

**Email:** {{ $order->billing_email }}


**Valor Total do Pedido:** R$ {{ round($order->billing_total, 2) }}

**Items Comprados**

@foreach ($order->products as $product)
Nome: {{ $product->name }} <br>
Preço: R$ {{ round($product->price, 2)}} <br>
Quantidade: {{ $product->pivot->quantity }} <br>
<hr>
@endforeach

Você pode consultar mais detalhes do seu pedido realizando o login em nossa Loja Online.

@component('mail::button', ['url' => config('app.url'), 'color' => '#212121'])
Elegance Bastos
@endcomponent

Agradecemos por escolher a Elegance Bastos.
Estamos sempre a sua disposição!

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent