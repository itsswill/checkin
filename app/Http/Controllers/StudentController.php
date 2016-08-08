<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DateTime;
use App\Http\Requests;
use App\Student;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function index()
    {
        return view ('checkin.index');
    }

    /**
     * Saves New Student in database
     */
    public function store(Request $request){
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $dob = new Carbon($request->input('dob'));

        $student = new Student;
        $student->first_name = $firstName;
        $student->last_name = $lastName;
        $student->dob = $dob;
        $student->save();
    }
}
