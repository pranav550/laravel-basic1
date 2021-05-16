<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;

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

Route::get('/test', [Student::class,'test']);
Route::get('/student', [Student::class,'index']);
Route::get('/student-first', function(){
    return view('student');
});

Route::get('/student-second', [Student::class,'studentPage']);
Route::view('/information','info');
Route::get('/mystudent/{id}',[student::class,'mystudent']);
Route::match(['get','post'],'/getform',function(){
    return 22;
});
Route::get('/mytest/{id}',[student::class,'mytestdata']);

Route::get('/myuser/{name}',[student::class,'myuserdata']);

Route::get('/userinfo/{name}/{sid}',[student::class,'userinfodata'])->where(['name'=>'[A-Za-z]+','sid'=>'[0-9]+']);

Route::middleware(['loginValue'])->group(function(){
    Route::get('/mytest/{id}',[student::class,'mytestdata']);
    Route::get('/myuser/{name}',[student::class,'myuserdata']);
});


Route::redirect('/testdata','information'); 


Route::get('list',[student::class,'getListData']);

