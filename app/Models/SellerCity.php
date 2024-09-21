<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'seller_id',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
