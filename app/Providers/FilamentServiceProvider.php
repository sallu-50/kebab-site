<?php

namespace App\Providers;

use Filament\Filament;
use Filament\Pages\Dashboard;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Filament serving event
        Filament::serving(function () {
            // Register pages
            Filament::registerPages([
                Dashboard::class,
            ]);

            // Register widgets
            Filament::registerWidgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ]);

            // Optionally, you can register resources manually if not auto-discovering
            // Filament::registerResources([
            //     \App\Filament\Resources\YourResource::class,
            // ]);
        });
    }
}
