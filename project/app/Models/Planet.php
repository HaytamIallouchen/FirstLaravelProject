<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    public function SolarSystem()
    {
        return $this->belongsTo(SolarSystem::class, 'solar_system_id');
    }
}
