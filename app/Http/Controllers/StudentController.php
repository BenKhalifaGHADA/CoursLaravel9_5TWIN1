<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return "Hello 5TWIN1";
    }

    public function ShowTemplate(){
        return view('Student.index',['variable'=>'Value']);
    }

    public function checkRole()
    {
        return ('checkRole');
    }
}
