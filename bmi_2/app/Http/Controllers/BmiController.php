<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bmi;
class BmiController extends Controller
{

    public function getBMI($mass, $weight){
        $model = new Bmi;
        $bmi = $model->calculateBMI($mass, $weight);
        echo $bmi;
    }
   /**
    * show the BMI
    *
    * @param double $mass
    * @param double $weight
    *
    * return \illuminate\Http\Response
    */
    public function showBMI($mass, $weight)
    {
        $model = new Bmi;
        $bmi = $model->calculateBMI($mass, $weight);
        echo $bmi;
        echo" <br> hier komt normaal mooi de bmi in html :widepeepohappy:";
    }
}
