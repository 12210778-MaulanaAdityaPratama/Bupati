<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use App\Filament\Auth\MyLogoutResponse;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(LogoutResponse::class, MyLogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot() {}
}
