<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function screenshort(){
      return view('user.screenshort');
    }

    public function download(){
      return view('user.download');
    }

    public function contact(){
      return view('user.contact');
    }
}
