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
}
