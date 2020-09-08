<?php

namespace Modules\Checkout\Http\Controllers;

use Exception;
use Modules\Support\Country;
use Modules\Cart\Facades\Cart;
use Modules\Page\Entities\Page;
use Illuminate\Routing\Controller;
use Modules\Payment\Facades\Gateway;
use Modules\User\Services\CustomerService;
use Modules\Checkout\Services\OrderService;
use Modules\Cart\Http\Middleware\CheckCartStock;
use Modules\Order\Http\Requests\StoreOrderRequest;
use Modules\Cart\Http\Middleware\CheckCouponUsageLimit;
use Modules\Cart\Http\Middleware\RedirectIfCartIsEmpty;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware([
            RedirectIfCartIsEmpty::class,
            CheckCartStock::class,
            CheckCouponUsageLimit::class,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = Cart::instance();
        $countries = Country::supported();
        $gateways = Gateway::all();
        $termsPageURL = Page::urlForPage(setting('storefront_terms_page'));

        return view('public.checkout.create', compact('cart', 'countries', 'gateways', 'termsPageURL'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Modules\Order\Http\Requests\StoreOrderRequest $request
     * @param \Modules\User\Services\CustomerService $customerService
     * @param \Modules\Checkout\Services\OrderService $orderService
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request, CustomerService $customerService, OrderService $orderService)
    {
        if (auth()->guest() && $request->create_an_account) {
            $customerService->register($request)->login();
        }

        $order = $orderService->create($request);

        $gateway = Gateway::get($request->payment_method);

        try {
            $response = $gateway->purchase($order, $request);
        } catch (Exception $e) {
            $orderService->delete($order);

            return response()->json([
                'message' => $e->getMessage(),
            ], 403);
        }

        return response()->json($response);
    }
}
