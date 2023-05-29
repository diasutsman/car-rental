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
        return Filament::getWidgets();
    }
}
