<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\Log;

class CarList extends Widget
{
    protected static string $view = 'filament.widgets.car-list';

    protected function getViewData(): array
    {
        Log::info('test');
        return [
            'cars' => \App\Models\Car::all(),
        ];
    }
}
