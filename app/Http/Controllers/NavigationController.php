<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function fleet()
    {
        return view('fleet', [
            'cars' => Car::all()
        ]);
    }

    public function blogs()
    {
        return view('blogs');
    }
}
