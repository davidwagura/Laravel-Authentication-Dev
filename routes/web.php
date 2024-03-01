<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('order/{order}', function (\App\Models\Order $order) {
    return view('order.view', ['order' => $order]);
})
    ->name('order.view')
    ->middleware([
        'auth.signed:order,customer',
        'auth:customer,seller',
    ]);