<div class="col-lg-6 col-sm-9">
    <div class="order-billing-details">
        <h4>{{ trans('storefront::account.view_order.billing_address') }}</h4>

        <address>
            {{ $order->billing_full_name }}
            <br>
            {{ $order->billing_address_1 }}
            <br>

            @if ($order->billing_address_2)
                {{ $order->billing_address_2 }}
                <br>
            @endif

            {{ $order->billing_city }}, {{ $order->billing_state_name }} {{ $order->billing_zip }}
            <br>
            {{ $order->billing_country_name }}
        </address>
    </div>
</div>
