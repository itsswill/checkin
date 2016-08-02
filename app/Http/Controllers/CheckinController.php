<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \DB;
use \DateTime;

class CheckinController extends Controller
{
    public function index(){
    	return view ('checkin.index');
    }

 	/**
 	 * addStudent              Handles adding a student to the database
 	 */
    public function addStudent(Request $request){

		$firstName = $request->input('first_name');
		$lastName = $request->input('last_name');
    	$comment = $request->input('comment');

    	//Insert into students table....
    	DB::table('students')->insert([
    		'first_name' => $firstName, 
    		'last_name' => $lastName, 
    		'comment' => $comment,
    		'created_at' => new DateTime(),
    		'updated_at' => new DateTime()
		]);

		return ['msg' => 'success'];
    }
}