<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class loginController extends Controller
{
    public function login_form(){
      return view('admin.login');
    }

    public function get_login(Request $request){

      $name=$request->name;
      $phone=$request->phone;
      $data=DB::table('admins')
              ->where('name',$name)
              ->where('phone',$phone)
              ->first();
      if ($data) {
          Session::put('name',$data->name);

          return view('admin.index');
      }
      else {
          Session::put('massage','Your Name or Phone Number Incorrect');
          return Redirect::to('/login');
      }

    }



}
