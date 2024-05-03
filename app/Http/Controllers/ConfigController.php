<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    public function getVersion(){
        $salida = shell_exec('git rev-list --count HEAD');
        $rv_1=5;$rv_2=0;$rv_3=1;
        $version= $rv_3.".".$rv_2.".".$rv_1;
        if ($salida>=2){
            for ($i=1; $i <=$salida ; $i++){
                $rv_1= $rv_1+1;
                if ($rv_1==10){
                    $rv_2= $rv_2+1;
                    if ($rv_2==10){
                        $rv_3= $rv_3+1;
                    }
                }
            }
            $version= $rv_3.".".$rv_2.".".$rv_1;
        }
        return $version;
    }

    public function getGenero(){
        $genero= ['Macho','Hembra'];
        return $genero;
    }

    public function getEspecie(){
        $especie= ['Canino','Felino'];
        return $especie;
    }
}
