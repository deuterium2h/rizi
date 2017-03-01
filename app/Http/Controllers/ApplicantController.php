<?php

namespace App\Http\Controllers;

use App\Permit;
use App\Citizen;
use App\Clearance;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function apply_for_citizen() //create method
    {
        return view('pages.end-user.apply-for-citizenship');
    }

    public function store_citizen(Request $request)
    {
        $citizen = new Citizen($request->all());
        $citizen->save();

        return $request->id;
    }

    public function apply_for_cedula()
    {
        return view('pages.end-user.apply-for-cedula');
    }

    public function apply_for_permit()
    {
        return view('pages.end-user.apply-for-permit');
    }

    public function apply_for_clearance()
    {
        return view('pages.end-user.apply-for-clearance'); 
    }

    public function store_clearance(Request $request)
    {
        $clearance = new Clearance($request->all());
        $clearance->save();

        return $request->id;
    }

    //BACKEND PROCESS
    public function citizen()
    {
    	return 'list of pre-registered citizen';
    }
    
    public function cedula()
    {
    	return 'hi';
    }

    public function clearance()
    {
    	return 'wew';
    }

    public function permit()
    {
    	return 'kkkd';
    }
}
