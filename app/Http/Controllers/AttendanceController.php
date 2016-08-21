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
use App\Attendance;
class AttendanceController extends Controller
{
    public function index()
    {
        $students = Student::all();
        foreach($students as $student){

            $checkForCheckin = Attendance::select('id', 'checkin')
                ->where('student_id', '=', $student->id)
                ->whereDate('checkin', '=', date('Y-m-d'))
                ->first();

            $checkForCheckout = Attendance::select('id', 'checkout')
                ->where('student_id', '=', $student->id)
                ->whereDate('checkout', '=', date('Y-m-d'))
                ->first();

            if($checkForCheckin){
                $student->checkedIn = true;
                $student->checkinId = $checkForCheckin->id;
            }else{
                $student->checkedIn = false;
            }
            if($checkForCheckout){
                $student->checkedOut = true;
                $student->checkoutId = $checkForCheckout->id;
            }else{
                $student->checkedOut = false;
            }

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
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        if($checkin == "in"){
            $checkin = new \DateTime();
        }

        if($checkout){
            $checkinId = $checkout;
            $checkout = new \DateTime();

            $att = Attendance::where('id', $checkinId)->first();
            $att->checkout = $checkout;
            $att->save();
        }else{
            $attendance = new Attendance();
            $attendance->student_id = $studentId;
            $attendance->guardian_id = $guardianId;
            $attendance->checkin = $checkin;
            $attendance->checkout = $checkout;
            $attendance->comment = $comment;
            $attendance->save();
            return redirect()->action('StudentController@index');
        }


    }
}