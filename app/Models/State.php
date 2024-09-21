<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_uf', 
        'uf',     
        'name',   
        'region', 
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
