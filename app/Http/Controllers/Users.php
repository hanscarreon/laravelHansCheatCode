<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    // index users
    function index(){
        $data = array( 'name'=> 'betlog', "age"=> 22 );
        return $data;
    }
    //view users
    function view($name){
        // throwing value in routes controller
        $data ="hello mother fucker";
        return $data.' '.$name;
    }
    // users show
    function show($name,$age,$course){
        // way 1
        // i prepared this one much cleaner
        $data = array();
        $data['name'] = $name;
        $data['age'] = $age;
        $data['course'] = $course;

        // way2
        // $data = array( 'name'=> $name, 'age'=>$age, 'course'=>$course);
        return view('pages/show',$data);
    }
}
