<?php

namespace App\Http\Controllers\Front;


use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function show(){

         return'welcom';

     }
public function showNameUser2(){

         return view('Karmela');

}
    public function showNameUser3(){

        return view('Project');

    }
public function create(){
    /*$obj= new \stdClass();
    $obj-> name ='Karim Mohamed';
    $obj-> id =1190002020;
    $obj-> gender ="Male";*/
 $cook =[];

        return view('welcome',compact('cook'));
}
    public function edit(){



        return view('karim');
    }
}
