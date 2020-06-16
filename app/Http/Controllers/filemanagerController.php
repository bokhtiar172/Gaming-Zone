<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\filemanager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class filemanagerController extends Controller
{


  public function all_filemanager(){
    return view('admin.filemanager.all_file');
  }
  public function add_filemanager(){
    return view('admin.filemanager.add_file');
  }

  public function store_filemanager(Request $request){
      $filemanager = new filemanager;
        $filemanager['name']=$request->name;


        $path=$request->file('status')->store('/file');

          $image=$request->file('status');
                  if ($image){

                    $image_name=Str::random(20);
                    $ext=strtolower($image->getClientOriginalExtension());
                    $image_full_name=$image_name.'.'.$ext;
                    $upload_path='file/';
                    $image_url=$upload_path.$image_full_name;
                    $success=$image->move($upload_path,$image_full_name);
                        if ($success) {
                        $filemanager['filemanager']=$image_url;
                        $filemanager->save();
                        return redirect('/all-filemanager');
                                      }
                           }

  }


        public function unactive_filemanager($id){
          $unactive_filemanager=filemanager::find($id);
            $unactive_filemanager['file_status']=0;
          $unactive_filemanager->save();
          return back();
        }


        public function active_file($id){
          $active_file=filemanager::find($id);
            $active_file['file_status']=1;
          $active_file->save();
          return back();
        }



        public function delete_file($id){
          $delete=filemanager::find($id);
            $delete->delete();
          return redirect('/all-filemanager');
        }
}
