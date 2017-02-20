<?php

namespace App\Http\Controllers;

use App\Citizen;

use Illuminate\Http\Request;

class CitizenController extends Controller
{
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
                ->paginate(10)
        : Citizen::latest('updated_at')->paginate(10);
        return view('pages.citizen.index', compact('citizens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.citizen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
