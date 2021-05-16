<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Facades\Http;

class Students extends Controller
{
    public function getListData(){
        $data = DB::connection('mysql')->select('select * from user_info');
       //$data = Student::all();
     //  $data = Student::find(1);
        return $data;
    }

    public function index(){
        echo "yes i am index";
    }

    public function test(){
        echo "yes i am test";
    }

    public function studentPage(){
        $data = [];
        $data['name']='code improve';
        $data['test']='code improve test';
        $data['num'] = 3;
        $data['list']=['chunmun','munmun','golu'];
        return view('student', $data);
    }

    public function mystudent($id){
        echo "my function ".$id;
        return view('mystudent');
    }

    public function mytestdata($id){
       echo $id;
    }

    public function myuserdata($name){
       echo $name;
    }

    public function userinfodata($name , $sid){
        echo "username is ".$name.$sid;
     }

     public function getApiListData(){
        $data=Http::get('https://reqres.in/api/unknown');
        // echo "<pre>"; print_r($data); die;
        return $data;
     }

     public function getFirstLayout(){
         return view('student-record');
     }

     public function getSecondLayout(){
         return view('student-list');
     }

     public function createSession(Request $request){
         $data = [
             'user_id'=>12,
             'user_name'=>'vishnu'
         ];
          //session($data);
          $request->session()->put($data);
          $messageArray = [
              'msg'=>'Added Successfully',
              'class'=>'alert alert-success'
          ];
          $request->session()->flash('message',$messageArray);
        echo "create Session";
    }

    public function showSession(Request $request){
      //  echo "<pre>"; print_r($request->session()->all());
       echo $request->session()->get('user_name');
      //  echo session('user_id').'=='.session('user_name');
        echo "show Session";
        if($request->session()->has('user_id')){
            echo "Yes Set";
        }
        if($request->session()->has('message')){
            echo session('message')['msg'];
        }
       
       // echo "<pre>"; print_r(session('message'));
        return view('student-list');
    }

    public function deleteSession(Request $request){
         $request->session()->flush();
        //$request->session()->forget(['user_id','user_name']);
        echo "delete Session";
    }
}
