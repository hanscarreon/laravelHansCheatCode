<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index(){
        $data = array( 'name'=> 'betlog', "age"=> 22 );
        return $data;
    }
    function view($name){
        $data ="hello mother fucker";
        return $data.' '.$name;
    }
    function show($name,$age,$course){
        // $data = array();
        // $data['name'] = $name;
        // $data['age'] = $age;
        // $data['course'] = $course;
        $data = array( 'name'=> $name, 'age'=>$age, 'course'=>$course);
        return view('pages/show',$data);
    }
}
