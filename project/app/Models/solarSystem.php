<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    use HasFactory;
    public function Planets()
    {
        return $this->hasMany(planet::class);
    }
}
