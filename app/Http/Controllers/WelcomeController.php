<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index(){
        return view ('student.create');
    }
}
