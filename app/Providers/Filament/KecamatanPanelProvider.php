<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class KecamatanPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {

        return $panel
            ->id('kecamatan')
            ->path('kecamatan')
            ->login()


            ->colors([
                'danger' => Color::Red,
                'success' => Color::Emerald,
                'gray' => Color::Slate,
                'info' => Color::Blue,
                'warning' => Color::Orange,
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Kecamatan/Resources'), for: 'App\\Filament\\Kecamatan\\Resources')
            ->discoverPages(in: app_path('Filament/Kecamatan/Pages'), for: 'App\\Filament\\Kecamatan\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Kecamatan/Widgets'), for: 'App\\Filament\\Kecamatan\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware(
                [
                    EncryptCookies::class,
                    AddQueuedCookiesToResponse::class,
                    StartSession::class,
                    AuthenticateSession::class,
                    ShareErrorsFromSession::class,
                    VerifyCsrfToken::class,
                    SubstituteBindings::class,
                    DisableBladeIconComponents::class,
                    DispatchServingFilamentEvent::class,
                ],

            )
            ->authMiddleware([
                Authenticate::class,

            ])
        ;
    }
}
