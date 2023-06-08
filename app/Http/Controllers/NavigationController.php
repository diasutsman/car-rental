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
    
    public function blogs()
    {
        return view('blogs');
    }
}
