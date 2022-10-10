<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bmi extends Model
{
    use HasFactory;

    public function calculateBMI($mass, $weight){
        return $mass/pow($weight, 2);
    }
}
