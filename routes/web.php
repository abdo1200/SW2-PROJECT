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
//home without login
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// to view home
Route::get('/home', 'HomeController@index')->name('home');
//to make admin view users
Route::get('/admin/viewuser.blade.php', 'adminController@viewusers')->name('viewusers');
//to make admin delete user
Route::delete('/admin/{id}', 'adminController@delete')->name("admin.delete");

//user routes
// to make user view his profile
Route::get('/user/viewprofile.blade.php', 'usercontroller@viewprofile')->name('viewprofile');
// to view user edit page his profile
Route::get('/user/editprofile.blade.php', 'usercontroller@editprofile')->name('editprofile');
// to make user edite his profile
Route::put('/user/viewprofile.blade.php', 'usercontroller@update');