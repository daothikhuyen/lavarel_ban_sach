<?php

namespace App\Providers;

use App\View\Composers\MenuComposers;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Facades\View::composer('header',MenuComposers::class);
        // Facades\View::composer('main',MenuComposers::class);
    }
}
