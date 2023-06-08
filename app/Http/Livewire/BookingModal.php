<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class BookingModal extends Component
{

    public string $carId;

    protected $listeners = [
        'book'
    ];

    public function render()
    {
        return view('livewire.booking-modal');
    }

    public function book($carId)
    {
        Log::info('Car ID: ' . $carId);
        $this->carId = $carId;
    }
}
