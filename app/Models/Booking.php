<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $casts = [
        'checkin_date' => 'date',
        'checkout_date' => 'date',

    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function hotels()
    {
        return $this->belongsTo(Hotels::class);
    }
}
