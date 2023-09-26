<?php

namespace App\Classes;

use App\Classes\RendszamGenerator;


class Parkolas
{
   public string $rendszam;
   public string $behajtas_ideje;

   public function __construct()
   {
      $this->rendszam = RendszamGenerator::get();
      $behajtas_ideje = time() - random_int(60, 15000);
      $this->behajtas_ideje = date('H:i:s', $behajtas_ideje);
   }
}
