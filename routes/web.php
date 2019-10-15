<?php

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
    return view('welcome');
});
Route::get('project/index', function () {
    return view('project/index');
});


Route::get('project/subscriber/index', function () {
    return view('project/subscriber/index');
});
Route::get('project/subscriber/subscribe', function () {
    return view('project/subscriber/subscribe');
});
Route::get('project/admin/allMembers', function () {
    return view('project/admin/allMembers');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin'],function(){
Route::get('/', 'AdminController@index')->name('admin.home');
Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
});
Route::group(['prefix'=>'project/admin'],function(){
Route::get('/index', 'AdminController@index');
Route::get('/allMembers/get', 'AdminController@allMembers');
Route::get('/allMembers/editStatus/{id}', 'AdminController@editStatus');
Route::get('/allMembers/cancleMember/{id}', 'AdminController@cancleMember');
});