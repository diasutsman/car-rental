<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {

        return view('home', [
            'cars' =>  Car::leftJoin('rentals', 'cars.id', '=', 'rentals.car_id')
                ->select('cars.*')
                ->whereNull('rentals.car_id')
                ->latest()
                ->limit(3)
                ->get(),
        ]);
    }
}
