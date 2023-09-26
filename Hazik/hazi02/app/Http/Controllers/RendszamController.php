<?php

namespace App\Http\Controllers;

use App\Classes\Adatbazis;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;




class RendszamController extends BaseController
{

   public function show_all()
   {
      $adatok = new Adatbazis();
      return view('rendszamok_show_all', ["r" => $adatok->getRandom()]);
   }

   public function create()
   {
      Adatbazis::create();
      return view('rendszam_create');
   }

   public function getAllData(Request $request)
   {
      $sz = Adatbazis::list();
      return view('rendszamok', ["rendszamok" => $sz]);
   }
}
