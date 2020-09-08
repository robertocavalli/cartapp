<?php

namespace Modules\Checkout\Listeners;

use Swift_TransportException;
use Modules\Checkout\Mail\Invoice;
use Modules\Checkout\Mail\NewOrder;
use Illuminate\Support\Facades\Mail;

class SendOrderEmails
{
    /**
     * Handle the event.
     *
     * @param \App\Events\OrderPlaced $event
     * @return void
     */
    public function handle($event)
    {
        try {
            if (setting('admin_order_email')) {
                Mail::to(setting('store_email'))
                    ->send(new NewOrder($event->order));
            }

            if (setting('invoice_email')) {
                Mail::to($event->order->customer_email)
                    ->send(new Invoice($event->order));
            }
        } catch (Swift_TransportException $e) {
            //
        }
    }
}
