<h1>Order Summary</h1>

<p><strong>Selected Carts:</strong></p>
<pre>{{ print_r($selectedCarts, true) }}</pre>

<p><strong>Subtotal:</strong> Rp. {{ number_format($subtotal, 0, ',', '.') }}</p>
<p><strong>Discount:</strong> Rp. {{ number_format($discount, 0, ',', '.') }}</p>
<p><strong>Shipping:</strong> Rp. {{ number_format($shipping, 0, ',', '.') }}</p>
<p><strong>Total:</strong> Rp. {{ number_format($total, 0, ',', '.') }}</p>