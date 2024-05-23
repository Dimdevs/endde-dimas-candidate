<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    use HasFactory;

    protected $table = "car_bookings";
    protected $primaryKey = 'id';
    protected $fillable = [
        'client_id',
        'car_id',
        'start_date',
        'end_date',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
