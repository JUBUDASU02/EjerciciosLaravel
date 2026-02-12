<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ProductInterface;
use App\Repositories\Eloquent\ProductRepository;

class ReposirotyServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
        ProductInterface :: class, ProductRepository :: class
        );
    }
}
