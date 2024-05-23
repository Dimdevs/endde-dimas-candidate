<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $primaryKey = 'id';
    protected $fillable = [
        'client_id',
        'item_id',
        'total_price',
        'date',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
