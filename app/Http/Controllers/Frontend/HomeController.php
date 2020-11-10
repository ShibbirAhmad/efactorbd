<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
       
      public function landing_page(){

             return view('Frontend.index');
      }
}
