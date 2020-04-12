<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
    public function showData(){
     
        $dataFromGs=file_get_contents("http://gsx2json.com/api?id=1SX2INmuOJx68yIRCGW7Fye21zuvGGsx9jAqM1-mMEio");
       $gsData=json_decode($dataFromGs);
    
       return view('pages.home',['datas'=> $gsData->rows]);
    

    }
}
