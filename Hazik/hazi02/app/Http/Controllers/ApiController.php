<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;




class ApiController extends BaseController
{

   public function getData($id)
   {
      $valasz =
         [
            "msg" => "Ok",
            "rendszam" => "GZY-355",
            "id" => $id
         ];
      #return view('api_getdata', ["valasz" => $valasz]);
      return response()->json($valasz);
   }
}
