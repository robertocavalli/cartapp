<div class="col-lg-6 col-sm-9">
    <div class="order-shipping-details">
        <h4>{{ trans('storefront::account.view_order.shipping_address') }}</h4>

        <address>
            {{ $order->shipping_full_name }}
            <br>
            {{ $order->shipping_address_1 }}
            <br>

            @if ($order->shipping_address_2)
                {{ $order->shipping_address_2 }}
                <br>
            @endif

            {{ $order->shipping_city }}, {{ $order->shipping_state_name }} {{ $order->shipping_zip }}
            <br>
            {{ $order->shipping_country_name }}
        </address>
    </div>
</div>
