<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    //
    function addstudent () {
        return view('students/add');
    }
    function savestudent () {
        
        //dump($_POST);
        $fdata =request()->all();
        request()->validate([
            "firstname"=>"required|min:9",
            "lastname"=>"required|min:5",
            "email"=>"required",
            "password"=>"required",

        ]);
        $st_firstname=$fdata["firstname"];
        $st_lastname=$fdata["lastname"];
        $st_email=$fdata["email"];
        $st_password=$fdata["password"];
        //dump($std_firstname,$std_lastname,$std_email, $std_password);
        Student::create([
            "firstname"=>$st_firstname,
            "lastname"=>$st_lastname,
            "email"=>$st_email,
            "password"=>$st_password
        ]);
        //dump("student addedd");
        return redirect()->route("students.stview");
    }
    function stview () {
        //dump("em");
        $allstudents=Student::all();
        //dump($allstudents);
        return view("students/stview",["vstudents"=>$allstudents]);
    }
    function show (Student $students){
       
        //dump($students);
        //$student_data=Student::findOrfail($students);
        //dump($student_data);
        return view("students/show",["student_info"=>$students]);
    }
    function destoty (Student $students){
        //dump($students);
        //$student_deleted=Student::findOrfail($students);
        //$student_deleted->delete();
        $students->delete();
        return redirect()->route("students.stview");
    }
    function edit (Student $students){
         //dump($students);
         //$student_info=Student::findOrfail($students);
         //dump($student_info);
         return view("students/edit",["students"=> $students]);

    }
    function update (Student $students){
        //dump($students);
        //$update_data=request()->all();
        //dump($update_data);
        //$student_old=Student::findOrfail($students);
        //$student_old->update([
            //"firstname"=>$update_data["firstname"],
            //"lastname"=>$update_data["lastname"],
            //"email"=>$update_data["email"],
            //"password"=>$update_data["password"]
        //]);
        $update_data=request()->all();
        request()->validate([
            "firstname"=>"required|min:9",
            "lastname"=>"required|min:5",
            "email"=>"required",
            "password"=>"required|min:10",
        ]);
        dump($update_data);
        $students->update([
            "firstname"=>$update_data["firstname"],
            "lastname"=>$update_data["lastname"],
        "email"=>$update_data["email"],
            "password"=>$update_data["password"]
        ]);
        return redirect()->route("students.show", $students);
    }
}

