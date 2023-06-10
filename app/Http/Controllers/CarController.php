<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        return view('cars', [
            'cars' =>  Car::leftJoin('rentals', 'cars.id', '=', 'rentals.car_id')
                ->select('cars.*')
                ->whereNull('rentals.car_id')
                ->get(),
        ]);
    }
}
