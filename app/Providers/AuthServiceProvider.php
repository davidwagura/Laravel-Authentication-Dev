<?php

namespace App\Providers;

use App\Models\Order;
use App\Policies\CustomerOrderPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Order::class => CustomerOrderPolicy::class,
    ];

    // Rest of the AuthServiceProvider
}