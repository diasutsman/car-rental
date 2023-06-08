<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return view('cars', [
            'cars' => Car::all()
        ]);
    }
}
