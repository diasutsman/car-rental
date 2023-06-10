<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rental extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSubtotalAttribute()
    {
        return ($this->tariff ? $this->tariff : $this->car->tariff)
            * ($this->start_date->diffInDays($this->end_date) + 1);
    }

    public function getFineAttribute()
    {
        return $this->getSubtotalAttribute() * 0.1 * $this->end_date->diffInDays(now());
    }
}
