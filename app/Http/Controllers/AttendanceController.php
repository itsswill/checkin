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

            $checkForCheckin = $this->isCheckedIn($student->id);
            $checkForCheckout = $this->isCheckedOut($student->id);

            if($checkForCheckin){
                $student->isCheckedIn = true;
                $student->recordId = $checkForCheckin->id;
            }else{
                $student->isCheckedIn = false;
            }

            if($checkForCheckout){
                $student->isCheckedOut = true;
            }else{
                $student->isCheckedOut = false;
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



        if($checkout){
            //user is trying to checkout
            $isCheckOut = $this->isCheckedOut($studentId);
            $isCheckedIn = $this->isCheckedIn($studentId);

            if($isCheckOut && $isCheckedIn){
                return redirect('attendance/create')
                    ->withErrors(['errors' => ['This student has already checked out!']])
                    ->withInput();
            }
        }
        
        if(isset($checkout) && ($checkout == "out")){
            //user is trying to checkout
            $isCheckOut = $this->isCheckedOut($studentId);
            $isCheckedIn = $this->isCheckedIn($studentId);

            if(!$isCheckedIn){
                return redirect('attendance/create')
                    ->withErrors(['errors' => ['This student must be checked in first!']])
                    ->withInput();
            }
        }

        if($checkin == "in") {
            //user is trying to checkin
            $isCheckedIn = $this->isCheckedIn($studentId);

            //The student is checked in. Lets Not let them make a new record.
            if($isCheckedIn){
                return redirect('attendance/create')
                    ->withErrors(['errors' => ['This student is already checked in!']])
                    ->withInput();
            }
        }

        //Now we check if we are checking them out
        if(isset($checkout) && ($checkout != "out")){

            $att = Attendance::where('id', $request->input('checkin'))->first();
            $att->checkout = new DateTime();
            $att->save();

            //redirect here...
            return redirect()->action('AttendanceController@index');
        }

        //Insert record.
        $attendance = new Attendance();
        $attendance->student_id = $studentId;
        $attendance->guardian_id = $guardianId;
        $attendance->checkin = new DateTime();
        $attendance->checkout = $checkout;
        $attendance->comment = $comment;
        $attendance->save();

        return redirect()->action('AttendanceController@index');
    }



    private function isCheckedIn($studentId)
    {
        $checkForCheckin = Attendance::select('id', 'checkin')
            ->where('student_id', '=', $studentId)
            ->whereDate('checkin', '=', date('Y-m-d'))
            ->first();

        return $checkForCheckin;
    }

    private function isCheckedOut($studentId)
    {
        $checkForCheckout = Attendance::select('id', 'checkout')
            ->where('student_id', '=', $studentId)
            ->whereDate('checkout', '=', date('Y-m-d'))
            ->first();

        return $checkForCheckout;
    }

}