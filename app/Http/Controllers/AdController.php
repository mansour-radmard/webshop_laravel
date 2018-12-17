<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
   public function ad ($id)
   {
      dd($id);
      return view('pages.ad');
   }
}
