<?php

namespace App\Http\Controllers;

use App\Citizen;

use App\Utilities\Curl;

use Illuminate\Http\Request;

class CitizenController extends Controller
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
        
        $citizens = $query 
        ? Citizen::where('last_name', 'LIKE', "%$query%")
                ->orWhere('first_name', 'LIKE', "%$query%")
                ->orWhere('middle_name', 'LIKE', "%$query%")
                ->orWhere('id', 'LIKE', "%$query%")
                ->paginate(5)
        : Citizen::latest('updated_at')->paginate(5);

        return view('pages.admin.citizen.index', compact('citizens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.citizen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Curl $curl)
    {

        $citizen = new citizen($request->all());
        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $request->file('avatar')->move('images/citizens', $fileName);
            $citizen->avatar = $fileName;
        }

        $response = json_decode($curl->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.captcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip()
        ]));

        if (! $response->success) {
            abort(400, 'Nope!');
        }

        $citizen->save();
        return redirect('citizens');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citizen = Citizen::findOrFail($id);

        if(is_null($citizen)){
            abort(404);
        }

        return view('pages.admin.citizen.show', compact('citizen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citizen = Citizen::findOrFail($id);

        if(is_null($citizen)){
            abort(404);
        }

        return view('pages.admin.citizen.edit', compact('citizen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $citizen = Citizen::findOrFail($id);
        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $request->file('avatar')->move('images/citizens', $fileName);
            $citizen->avatar = $fileName;
        }
        $citizen->is_registered = 1;
        $citizen->is_valid = 1;
        $citizen->update($request->all());

        return redirect('citizen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Citizen::findOrFail($id)->delete();

        return redirect('citizen');
    }
}
