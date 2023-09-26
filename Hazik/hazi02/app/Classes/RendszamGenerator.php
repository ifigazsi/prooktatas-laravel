<?php

namespace App\Classes;

abstract class RendszamGenerator
{
   static function get(): string
   {
      $a = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90));
      $sz1 = random_int(0, 9);
      $sz2 = random_int(0, 9);
      $sz3 = random_int(0, 9);
      $r = $a . "-" . $sz1 . $sz2 . $sz3;
      return $r;
   }
}
