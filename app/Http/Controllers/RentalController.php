<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RentalController extends Controller
{
    public function index()
    {
        return view('rental.index', [
            'rentals' => Rental::join('cars', 'rentals.car_id', '=', 'cars.id')
                ->where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function store(Request $request, Car $car)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'pickup_location' => 'required|string',
            'return_location' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $total = Carbon::parse($request->start_date)->diffInDays(Carbon::parse($request->end_date)) * intval($car->tariff);

        Rental::create([
            'car_id' => $car->id,
            'user_id' => auth()->user()->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total' => $total,
            'information' => $request->information,
            'pickup_location' => $request->pickup_location,
            'return_location' => $request->return_location,
        ]);

        return redirect()->route('rentals.index')->with('success', 'Rental has been booked!');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index')->with('success', 'Rental has been deleted!');
    }
}
