<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'nickname',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function cities()
    {
        return $this->belongsToMany(City::class, 'seller_cities');
    }
}
