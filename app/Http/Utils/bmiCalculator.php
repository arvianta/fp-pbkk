<?php

namespace App\Http\Utils;

class bmiCalculator
{
    public function calculateBMI($height, $weight)
    {
        $height = $height / 100;
        $bmi = $weight / ($height * $height);
        return $bmi;
    }
}