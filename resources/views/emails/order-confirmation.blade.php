<h2>¡Gracias por tu compra, {{ $order->customer_name }}!</h2>

<p>Tu pedido #{{ $order->id }} ha sido recibido correctamente. A continuación, el detalle:</p>

<ul>
    @foreach ($order->items as $item)
        <li>{{ $item->product_name }} x{{ $item->quantity }} - ${{ number_format($item->price * $item->quantity, 0, ',', '.') }}</li>
    @endforeach
</ul>

<p><strong>Total:</strong> ${{ number_format($order->total, 0, ',', '.') }}</p>
<p>Dirección: {{ $order->address }}, {{ $order->commune }}</p>
<p>Estado actual del pedido: {{ ucfirst($order->status) }}</p>

<p>Te mantendremos informado sobre cualquier actualización.</p>

<p>Atentamente,<br>PC Fast Mariquina</p>
