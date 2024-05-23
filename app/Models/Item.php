<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "items";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];

    public function order()
    {
        return $this->hasMany(Order::class, 'item_id');
    }
}