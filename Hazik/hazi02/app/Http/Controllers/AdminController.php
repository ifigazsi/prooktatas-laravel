<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{

   private string $time;

   private function setTime()
   {
      $this->time = date('H:i');
   }

   public function index()
   {
      $this->setTime();
      return view('admin', ["time" => $this->time]);
   }

   public function show()
   {
      $this->setTime();
      return view('admin_show', ["time" => $this->time]);
   }

   public function delete()
   {
      $this->setTime();
      return view('admin_delete', ["time" => $this->time]);
   }

   public function add()
   {
      $this->setTime();
      return view('admin_add', ["time" => $this->time]);
   }
}
