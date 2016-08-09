<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \DateTime;
use App\Guardian;

class GuardianController extends Controller
{
    public function index(){
        return view('guardian.create');
    }

    /**
     * Saves New Student in database
     */
    public function store(Request $request){
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $addressName = $request->input('address');
        $city = $request->input('city');
        $province = $request->input('province');
        $postalCode = $request->input('postal_code');
        $phoneNumber = $request->input('phone_number');

        $guardian = new Guardian;
        $guardian->first_name = $firstName;
        $guardian->last_name = $lastName;
        $guardian->address = $addressName;
        $guardian->city = $city;
        $guardian->province = $province;
        $guardian->postal_code = $postalCode;
        $guardian->phone_number = $phoneNumber;
        $guardian->save();
    }

}
