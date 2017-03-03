<?php

namespace App\Http\Controllers;

use App\Permit;

use App\Utilities\Curl;

use Illuminate\Http\Request;

class PermitController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$query = $request->get('q');
		
		$permits = $query 
		? Permit::where('business_name', 'LIKE', "%$query%")
				->orWhere('business_type', 'LIKE', "%$query%")
				->orWhere('business_owner', 'LIKE', "%$query%")
				->orWhere('id', 'LIKE', "%$query%")
				->paginate(5)
		: Permit::latest('updated_at')->paginate(5);

		return view('pages.admin.permit.index', compact('permits'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.admin.permit.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, Curl $curl)
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
                        
            $permit->is_registered = 1;
            
            $permit->is_valid = 1;       
            
            $permit->save();

            return redirect('permit');
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$permit = Permit::findOrFail($id);
		
		return view('pages.admin.permit.show', compact('permit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$permit = Permit::findOrFail($id);

		return view('pages.admin.permit.edit', compact('permit'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id, Curl $curl)
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
        	$permit = Permit::findOrFail($id);

        	$permit->is_registered = 1;
            
            $permit->is_valid = 1;
            
            $permit->update($request->all());

            return redirect('permit');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Permit::findOrFail($id)->delete();

		return redirect('permit');
	}
}
