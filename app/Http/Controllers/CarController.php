<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        return view('cars', [
            'cars' =>  Car::whereNotExists(function ($query) {
                $query->select('car_id')
                    ->from('rentals')
                    ->where('cars.id', '=', DB::raw('rentals.car_id'));
            })->get(),
        ]);
    }
}
