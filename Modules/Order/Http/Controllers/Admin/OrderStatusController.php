<?php

namespace Modules\Order\Http\Controllers\Admin;

use Modules\Order\Entities\Order;
use Illuminate\Support\Facades\Mail;
use Modules\Order\Entities\OrderProduct;
use Modules\Order\Mail\OrderStatusChanged;

class OrderStatusController
{
    /**
     * Update the specified resource in storage.
     *
     * @param \Modules\Order\Entities\Order $request
     * @return \Illuminate\Http\Response
     */
    public function update(Order $order)
    {
        $order->update(['status' => request('status')]);

        $this->restoreStock($order);

        $message = trans('order::messages.status_updated');

        return $message;

        if (setting('order_status_email')) {
            Mail::to($order->customer_email)
                ->send(new OrderStatusChanged($order));
        }

        return $message;
    }

    private function restoreStock(Order $order)
    {
        $order->products->each(function (OrderProduct $orderProduct) {
            $orderProduct->product->increment('qty', $orderProduct->qty);
        });
    }
}
