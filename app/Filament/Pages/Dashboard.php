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
        $username = auth()->user()->username;
        return "{$username}'s Dashboard";
    }

    protected function getWidgets(): array
    {
        return array_slice(Filament::getWidgets(), 0, 1);
    }
}
