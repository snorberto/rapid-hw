<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.index');
});

Auth::routes();



Route::get("goToLogin", function() {return View::make("auth.login");});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//subpage routes
Route::get("Company", function() {return View::make("layouts.subpages.Company");});
Route::get("Team", function() {return View::make("layouts.subpages.Team");});
Route::get("Careers", function() {return View::make("layouts.subpages.Careers");});
Route::get("News", function() {return View::make("layouts.subpages.News");});
Route::get("Classif", function() {return View::make("layouts.subpages.Classif");});
Route::get("Policy", function() {return View::make("layouts.subpages.Policy");});
Route::get("Develop", function() {return View::make("layouts.subpages.Develop");});
Route::get("ContactUs", function() {return View::make("layouts.subpages.ContactUs");});

//image gallery:
Route::get("img_Main", function() {return View::make("layouts.subpages.img_gal.Main");});
Route::get('img_View',"App\Http\Controllers\ImageGalleryController@showPictures");
Route::get('img_Upload', function() {return View::make("layouts.subpages.img_gal.Create");});
Route::resource('ImageGallery',"App\Http\Controllers\ImageGalleryController");
Route::get("img_pictureDelete/{id}", "App\Http\Controllers\ImageGalleryController@deletePicture");

//Message posts:
Route::post('postContactMessage', 'App\Http\Controllers\MessageController@save');

//Admin panel:
Route::get('admin-master', function() {return View::make("layouts.master");});
/*Admin page actions */
Route::get("adm_messageResult", "App\Http\Controllers\MessageController@showMessages");
Route::get("adm_getUsersResult", "App\Http\Controllers\userController@showUsers");
Route::get("adm_userDelete/{id}", "App\Http\Controllers\userController@deleteUser");
Route::get("adm_userUpdate/{id}", "App\Http\Controllers\userController@showIndividualUser");
Route::post('adm_userUpdate/postEditUser', "App\Http\Controllers\userController@updateIndividualUser");
Route::get("adm_addUsers", function() {return View::make("layouts.admin.adm_addUsers");});
Route::post('postAddUser', 'App\Http\Controllers\userController@saveUser');


/********************** */