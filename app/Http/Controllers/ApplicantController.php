<?php

namespace App\Http\Controllers;

use App\Permit;
use App\Cedula;
use App\Citizen;
use App\Clearance;
use App\Utilities\Curl;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
	public function apply_for_citizen() //create method
	{
		return view('pages.end-user.apply-for-citizenship');
	}

	public function store_citizen(Request $request, Curl $curl)
	{
		$response = json_decode($curl->post('https://www.google.com/recaptcha/api/siteverify', [
			'secret'   => config('services.captcha.secret'),
			'response' => $request->input('g-recaptcha-response'),
			'remoteip' => $request->ip()
		]));

		if ( ! $request->input('g-recaptcha-response')) {
			abort(400, 'Captcha Not Answered, Please go back');
		}
		
		if (! $response->success) {
			$citizen = new Citizen($request->all());
				
			$citizen->save();

			$tid = $citizen->id;

			return view('pages.end-user.pending', compact('tid'));
		}
	}

	public function apply_for_cedula()
	{
		return view('pages.end-user.apply-for-cedula');
	}

	public function store_cedula(Request $request)
	{
		$cedula = new Cedula($request->all());

		$cedula->save();

		$tid = $cedula->id;

		return view('pages.end-user.pending', compact('tid'));
	}

	public function apply_for_permit()
	{
		return view('pages.end-user.apply-for-permit');
	}

	public function store_permit(Request $request, Curl $curl)
	{
		$response = json_decode($curl->post('https://www.google.com/recaptcha/api/siteverify', [
			'secret'   => config('services.captcha.secret'),
			'response' => $request->input('g-recaptcha-response'),
			'remoteip' => $request->ip()
		]));

		if ( ! $request->input('g-recaptcha-response')) {
			abort(400, 'Captcha Not Answered, Please go back');
		}
		
		if (! $response->success) {
			$permit = new Permit($request->all());

			$permit->save();

			$tid = $permit->id;

			return view('pages.end-user.pending', compact('tid'));
		}
		
	}

	public function apply_for_clearance()
	{
		return view('pages.end-user.apply-for-clearance'); 
	}

	public function store_clearance(Request $request)
	{
		$clearance = new Clearance($request->all());

		$clearance->save();

		$tid = $clearance->id;

		return view('pages.end-user.pending', compact('tid'));
	}

}
