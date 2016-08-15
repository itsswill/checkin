<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \DateTime;
use App\Guardian;
use App\GuardianStudent;
use App\Student;
use Carbon\Carbon;

class GuardianController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('guardian.create', ['students' => $students]);
    }

    /**
     * Saves New Guardian in database
     */
    public function store(Request $request){
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $dob = new Carbon($request->input('dob'));
        $addressName = $request->input('address');
        $city = $request->input('city');
        $province = $request->input('province');
        $postalCode = $request->input('postal_code');
        $phoneNumber = $request->input('phone_number');
        $studentIds = $request->input('student_ids');
        $studentIds = explode('|', $studentIds); //array studentIds


        $guardian = new Guardian;
        $guardian->first_name = $firstName;
        $guardian->last_name = $lastName;
        $guardian->dob = $dob;
        $guardian->address = $addressName;
        $guardian->city = $city;
        $guardian->province = $province;
        $guardian->postal_code = $postalCode;
        $guardian->phone_number = $phoneNumber;
        $guardian->save();


        foreach($studentIds as $student)
        {
            $attach = new GuardianStudent;
            $attach->student_id = $student;
            $attach->guardian_id = $guardian->id;
            $attach->save();
        }
    }

}
