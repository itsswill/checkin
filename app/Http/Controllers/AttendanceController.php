<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \DateTime;
use App\Guardian;
use App\GuardianStudent;
use App\Student;
use Carbon\Carbon;
use \DB;
class AttendanceController extends Controller
{
    public function index()
    {
        $students = Student::all();
        foreach($students as $student){
            $guardians = DB::table('guardian_student as gs')
                ->select(
                    'g.id as guardian_id',
                    'g.first_name',
                    'g.last_name'
                )
                ->leftJoin('guardians as g', 'g.id', '=', 'gs.guardian_id')
                ->where('gs.student_id', '=', $student->id)
                ->get();

            $student->guardians = $guardians;
        }
        return view('attendance.create', ['students' => $students]);
    }

    public function store(Request $request){
        $studentId = $request->input('student_id');
        $guardianId = $request->input('guardian_id');
        $comment = $request->input('comment');

        if($request->input('checkin') == "in"){
            $checkin = new \DateTime();
        }

        if($request->input('checkout') == "out"){
            $checkout = new \DateTime();
        }

    }
}