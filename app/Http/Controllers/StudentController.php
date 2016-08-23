<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DateTime;
use App\Http\Requests;
use App\Student;
use Carbon\Carbon;
use Validator;

class StudentController extends Controller
{
    public function index()
    {
        return view ('student.create');
    }

    /**
     * Saves New Student in database
     */
    public function store(Request $request){
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $dob = new Carbon($request->input('dob'));

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect('student/create')
                ->withErrors($validator)
                ->withInput();
        }

        $student = new Student;
        $student->first_name = $firstName;
        $student->last_name = $lastName;
        $student->dob = $dob;
        $student->save();
        return redirect()->action('GuardianController@index');
    }
}

