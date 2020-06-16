<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\filemanager;

class downloadController extends Controller
{
    public function download(){
      $all=filemanager::all();
      return view('welcome',compact('all'));
    }
}
