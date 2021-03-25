<?php
namespace App\Service;

use Faker\Factory;
use Faker;

class Code
{
    public function genererCodeTransaction()
    {
        $faker=Faker\Factory::create('fr_FR');
        $codeTransaction=($faker->numberBetween($min = 100000000, $max = 900000000));
        //dd("bonjour");
        return $codeTransaction;
    }

    public function genererNumeroCompte()
    {
        $faker=Faker\Factory::create('fr_FR');
        $codeTransaction=($faker->numberBetween($min = 1000, $max = 9000));
        //dd("bonjour");
        return $codeTransaction;
    }


    public function calculFrais($monant)
    {
        if($monant<=5000){
            return 425;
        }
        elseif(($monant>5000)&& ($monant<=10000)){
            return 825;
        }
        elseif(($monant>10000)&& ($monant<=15000)){
            return 1270;
        }
        elseif(($monant>15000)&& ($monant<=20000)){
            return 1695;
        }
        elseif(($monant>20000)&& ($monant<=50000)){
            return 2500;
        }
        elseif(($monant>50000)&& ($monant<=60000)){
            return 3000;
        }
        elseif(($monant>60000)&& ($monant<=75000)){
            return 4000;
        }
        elseif(($monant>75000)&& ($monant<=120000)){
            return 5000;
        }
        elseif(($monant>120000)&& ($monant<=150000)){
            return 6000;
        }
        elseif(($monant>150000)&& ($monant<=200000)){
            return 7000;
        }
        elseif(($monant>200000)&& ($monant<=250000)){
            return 8000;
        }
        elseif(($monant>250000)&& ($monant<=300000)){
            return 9000;
        }
        elseif(($monant>300000)&& ($monant<=400000)){
            return 12000;
        }

        elseif(($monant>400000)&& ($monant<=750000)){
            return 15000;
        }
        elseif(($monant>750000)&& ($monant<=900000)){
            return 22000;
        }
        elseif(($monant>900000)&& ($monant<=1000000)){
            return 25000;
        }
        elseif(($monant>1000000)&& ($monant<=1125000)){
            return 27000;
        }
        elseif(($monant>1125000)&& ($monant<=1400000)){
            return 3000;
        }
        elseif(($monant>1400000)&& ($monant<=2000000)){
            return 30000;
        }
        elseif($monant>2000000){
            return ($monant*0.02);
        }
    }
}