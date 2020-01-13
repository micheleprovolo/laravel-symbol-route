<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
   public function index() {
       return view ('welcome');
   }

   public function getFirstExtendedPage() {
       return view ('finalPages.final1');
   }

   public function getSecondExtendedPage() {
    return view ('finalPages.final2');
}

}
