<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Students;

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

Route::get('/test', [Students::class,'test']);
Route::get('/student', [Students::class,'index']);
Route::get('/student-first', function(){
    return view('student');
});

Route::get('/student-second', [Students::class,'studentPage']);
Route::view('/information','info');
Route::get('/mystudent/{id}',[students::class,'mystudent']);
Route::match(['get','post'],'/getform',function(){
    return 22;
});
Route::get('/mytest/{id}',[students::class,'mytestdata']);

Route::get('/myuser/{name}',[students::class,'myuserdata']);

Route::get('/userinfo/{name}/{sid}',[students::class,'userinfodata'])->where(['name'=>'[A-Za-z]+','sid'=>'[0-9]+']);

Route::middleware(['loginValue'])->group(function(){
    Route::get('/mytest/{id}',[students::class,'mytestdata']);
    Route::get('/myuser/{name}',[students::class,'myuserdata']);
});


Route::redirect('/testdata','information'); 

Route::get('api-list',[students::class,'getApiListData']);
Route::get('list',[students::class,'getListData']);

