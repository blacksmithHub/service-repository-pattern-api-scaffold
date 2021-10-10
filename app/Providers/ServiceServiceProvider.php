<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\{
    UserService
};
use App\Services\Contracts\{
    UserServiceInterface
};

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        UserServiceInterface::class => UserService::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
