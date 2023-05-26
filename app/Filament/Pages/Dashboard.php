<?php

namespace App\Filament\Pages;

use Filament\Facades\Filament;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public static function getNavigationLabel(): string
    {
        return auth()->user()->isAdmin() ? 'Dashboard' : 'Home';;
    }

    protected function getHeading(): string
    {
        return $this->getNavigationLabel();
    }

    protected function getWidgets(): array
    {
        if (auth()->user()->isAdmin()) {
            return array_slice(Filament::getWidgets(), 0, 1);
        }
        return [
            \App\Filament\Widgets\CarList::class,
            \App\Filament\Widgets\CarDetail::class,
        ];
    }
}
