<?php

use Illuminate\Support\Facades\Route;

Route::get('order/{order}', function (\App\Models\Order $order) {
    return view('order.view', ['order' => $order]);
})
    ->name('order.view')
    ->middleware([
        'auth.signed:order,customer',
        'auth:customer,seller',
        'can:view,order'
    ]);