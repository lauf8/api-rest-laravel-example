<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'city_id',
        'address',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
