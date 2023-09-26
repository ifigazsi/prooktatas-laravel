<?php

namespace App\Classes;


abstract class Adatbazis
{
   public static array $adatok;

   public static function create()
   {
      self::$adatok = array();
      while (count(self::$adatok) < 20) {
         $parkolas = new Parkolas();
         self::$adatok[] = $parkolas;
      }
   }

   public function getRandom()
   {
      $x = array_rand($this->adatok);
      $y = $this->adatok[$x];
      return $y->rendszam;
   }

   public static function list()
   {
      self::create();
      $szoveg = "";
      foreach (self::$adatok as $parkolas) {
         $szoveg .= $parkolas->rendszam . "<br>";
      }
      return $szoveg;
   }
}
