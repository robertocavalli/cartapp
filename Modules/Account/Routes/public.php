<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('account', 'AccountDashboardController@index')->name('account.dashboard.index');

    Route::get('account/profile', 'AccountProfileController@edit')->name('account.profile.edit');
    Route::put('account/profile', 'AccountProfileController@update')->name('account.profile.update');

    Route::get('account/orders', 'AccountOrderController@index')->name('account.orders.index');
    Route::get('account/orders/{id}', 'AccountOrderController@show')->name('account.orders.show');

    Route::get('account/wishlist', 'AccountWishlistController@index')->name('account.wishlist.index');

    Route::get('account/reviews', 'AccountReviewController@index')->name('account.reviews.index');
});
