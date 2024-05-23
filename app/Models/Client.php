<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'address',
        'start_date_contract',
        'end_date_contract',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'client_id');
    }

    public function car_booking()
    {
        return $this->hasMany(CarBooking::class, 'client_id');
    }
}
