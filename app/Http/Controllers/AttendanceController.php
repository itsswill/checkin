<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \DateTime;
use App\Guardian;
use App\GuardianStudent;
use App\Student;
class AttendanceController extends Controller
{
    public function index(){
        return view ('attendance.create');
    }
}