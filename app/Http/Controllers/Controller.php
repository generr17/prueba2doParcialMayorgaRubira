<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function calcular(Request $res){
       $numbase=$res->base;
       $numExponente=$res->exponente;
       $contador=0;
       $resultado=1;
       $total=0;
       $aux=$res->acumulador;
       $respuesta=0;
       if($numbase!=0 && $numExponente!=0){

       if($numbase<0){
        $numbase=$numbase*(-1);
       }
       if($numExponente<0){
         $numExponente=$numExponente*(-1);
       }
       do{
           $suma=0;
           $cont=0;
           do{
            $suma=$suma+$numbase;
            $cont=$cont+1;
           }while($cont<$resultado);
          $resultado=$suma;
          $contador=$contador+1;
       }while($contador<$numExponente);
       $respuesta=$resultado;
    }
        
        $total=$aux+$respuesta;
     
        return view('welcome',['respuesta'=>$respuesta,'total'=>$total]) ;
   
    }
   
      
}

