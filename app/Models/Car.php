<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = "cars";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'merk',
        'type',
        'plat_number',
    ];

    public function car_booking()
    {
        return $this->hasMany(CarBooking::class, 'car_id');
    }
}
