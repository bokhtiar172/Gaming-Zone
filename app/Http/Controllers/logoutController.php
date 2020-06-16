<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;

class logoutController extends Controller
{
  public function user_logout(){

    Session::flush();
    return Redirect::to('/');
  }



}
