<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class registerController extends Controller
{
    public function index(){
      $alladmin= admin::latest()->get();
        return view('admin.all_admin');

    }

    public function reg_form(){
      return view('admin.reg');
    }

    public function save_admin(Request $request){


      $admin=new admin;
        $admin['name']=$request->name;
        $admin['phone']=$request->phone;
      $admin->save();
      return view('admin.all_admin');
    }


    public function edite_admin($id){
      $edite_admin=admin::find($id);
        return view('admin.edite_admin',compact('edite_admin'));
    }

    public function update_admin(Request $request,$id){
      $admin=admin::find($id);
        $admin['name']=$request->name;
        $admin['phone']=$request->phone;
      $admin->save();
      return view('admin.all_admin');
    }


    public function delete_admin($id){
      $delete=admin::find($id);
            $delete->delete();
      return back();
    }
}
