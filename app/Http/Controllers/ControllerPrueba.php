<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrueba extends Controller
{
    

    public function index(){
        // echo "hola mundo";
        /*Introducir dos numeros distintos y mostrar el numero mayor*/
        $numero1=45;
        $numero2=85;
        if($numero1>$numero2){
            $res=$numero1;
        }else{
            $res=$numero2;
        }
        return view('ejemplo1',compact('res'));
    }
    public function ejemplo2(){
        // echo "estoy en la funcion ejemplo2";
        return view('ejemplo2');
    }



    public  function ejemplo2_res(Request $request){
        $n1=$request->post('valor1');
        $n2=$request->post('valor2');
        if($n1>$n2){
            $res=$n1;
        }else{
            $res=$n2;
        }
        echo json_encode(array('0'=>$res));
    }
}
