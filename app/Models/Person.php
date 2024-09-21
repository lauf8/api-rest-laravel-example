<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'birth_date',
        'sex',
        'is_active',
        'phone',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }

}
