<?php

namespace Modules\Checkout\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \Modules\Checkout\Events\OrderPlaced::class => [
            \Modules\Checkout\Listeners\UpdateOrderStatus::class,
            \Modules\Checkout\Listeners\SendOrderEmails::class,
            \Modules\Checkout\Listeners\AddPlacedOrderToSession::class,
        ],
    ];
}
