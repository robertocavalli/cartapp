<?php

namespace Modules\Checkout\Events;

use Illuminate\Queue\SerializesModels;

class OrderPlaced
{
    use SerializesModels;

    /**
     * The instance of order.
     *
     * @var \Modules\Order\Entities\Order
     */
    public $order;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }
}
