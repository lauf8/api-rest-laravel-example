<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name',
        'cod_ibge',
        'ddd',
    ];


    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_cities');
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
