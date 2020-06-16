<?php

use Illuminate\Support\Facades\Route;
use App\filemanager;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $allapp=filemanager::where('file_status',1)->get();

    return view('user.index',compact('allapp'));
});

Route::get('/about1','aboutController@about1');
Route::get('/about2','aboutController@about2');
Route::get('/about3','aboutController@about3');

Route::get('/screenshort','userController@screenshort');
Route::get('/download','userController@download');
Route::get('/contact','userController@contact');



//admin area
Route::get('/login','loginController@login_form');
Route::get('/register','registerController@reg_form');
Route::get('/all-admin','registerController@index');
Route::get('/edite-admin/{id}','registerController@edite_admin');
Route::post('/update_admin/{id}','registerController@update_admin');
Route::get('/delete-admin/{id}','registerController@delete_admin');
//setting
Route::get('/logout','logoutController@user_logout');
Route::get('/profile','logoutController@profile');




Route::post('/save_admin','registerController@save_admin');
Route::post('/get-login','loginController@get_login');
//file
Route::get('/all-filemanager','filemanagerController@all_filemanager');
Route::get('/add-filemanager','filemanagerController@add_filemanager');
Route::post('/store-filemanager','filemanagerController@store_filemanager');
Route::get('/unactive_file/{id}','filemanagerController@unactive_filemanager');
Route::get('/active_file/{id}','filemanagerController@active_file');
Route::get('/delete-file/{id}','filemanagerController@delete_file');


//
