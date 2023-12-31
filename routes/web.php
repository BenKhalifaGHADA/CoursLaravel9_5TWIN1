<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StudentController;

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



/*
 * /id/5 avec 5 donné comme paramètre ==> Le param est 5
 * */
//pattern
// /id/test ==> ok ==> faux
// /id/5 ==> ok ==> vrai
// id/kl5 ==> ok ==> faux

Route::get('/id/{param?}',function($param=null){
   return "C'est un paramètre ".$param;
})->where('param','[0-9]+');
// /test/ message / id

Route::get('/test/{message}/{id}',function($message,$id){
    return $message.$id;
})->where(['message'=>'[a-zA-Z]+','id'=>'[0-9]+']);
/*->where('message',['a-zA-Z]+'])->where('id','[0-9]+');*/
/*Route::pattern('id','[0-9]+');*/

/*
 * /test (nom de la route:NomRoute)  ==> "Hello 5TWIN"
 */
Route::get('/test',function(){
    return "5TWIN1";
})->name('NomRoute');
/*Famille de redirection */
Route::get('/helloRedirect',function(){
   return redirect()->route('NomRoute');
});

Route::permanentRedirect('/test2','/test');
//Blade (moteur de template utilisé par laravel
Route::view('/homePage','welcome');

//Route vers notre controlleur
Route::get('/home',[StudentController::class,'index']);

Route::get('/template',[StudentController::class, 'ShowTemplate']);

//Route de middleware
Route::get('check/role',[StudentController::class,'checkRole'])->middleware('roleType');
