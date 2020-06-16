<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about1(){
      return view('user.about1');
    }

    public function about2(){
      return view('user.about2');
    }

    public function about3(){
      return view('user.about3');
    }
}
