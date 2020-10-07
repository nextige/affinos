@component('mail::message')
# Affinos Order {{ '#' . $order->id}}

Your order {{$order->id}} has been placed.

<h1>{{ $order->package->name}} ({{ $order->package->recurrance->name }})</h1>
<h1>${{ $order->order_total }}</h1>
<h1>{{ $order->user->name }}</h1>
@component('mail::button', ['url' => url('view-order') . "/" . $order->id])
View Order
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
