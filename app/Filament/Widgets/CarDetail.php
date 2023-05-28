<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Log;

class CarDetail extends Widget
{
    protected static string $view = 'filament.widgets.car-detail';

    protected $listeners = ['showCar'];

    public $car;

    public function showCar(Car $car)
    {
        $this->car = $car;
    }

    protected function getViewData(): array
    {
        return [
            'car' => $this->car,
        ];
    }
}
