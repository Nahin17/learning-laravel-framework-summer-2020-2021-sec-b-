 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddbookController;

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

 route::get('/logout','logoutController@logout');
 
  Route::get('/login','LoginController@index');
 Route::post('/login','LoginController@verifyy');

 Route::get('/logout','logoutController@ind');

   // Route::get('/login', ['uses'=>'LoginController@index']);








//Route::get('/home', ['uses'=>'HomeController@index']);
   Route::get('/home','HomeController@index');



 Route::get('/user/list','UserController@index');
 Route::get('/user/create','UserController@create');
 Route::post('/user/create','UserController@insert');

    Route::get('/user/details/{id}/{name}/{email}','UserController@details');
     Route::get('/user/edit/{id}/{name}/{email}','UserController@edit');
    Route::post('/user/edit/{id}/{name}/{email}','UserController@update');

    Route::get('/user/edit/{id}/{name}/{email}','UserController@delete');
    Route::post('/user/edit/{id}/{name}/{email}','UserController@destroy'); 





















 
      