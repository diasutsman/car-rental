<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;
use Illuminate\Foundation\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            // Filament::registerStyles([
            //     app(Vite::class)->asset('resources/css/app.css', 'app'),
            // ]);

            Filament::registerViteTheme('resources/css/app.css');

            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Data Management')
                    ->icon('heroicon-s-database')
                    ->collapsed(),
            ]);
        });
    }
}
