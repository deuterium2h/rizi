<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Activity;

use App\ActivityPhoto;

use Illuminate\Database\Eloquent\Builder;

use App\Http\Controllers\Controller;

class ActivityController extends Controller
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
        $activities = Activity::latest('updated_at')->get();
        
        return view('pages.admin.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Activity::create($request->all());

        return redirect('activity');
    }

    public function addPhoto($id, Request $request)
    {
        $photo = ActivityPhoto::fromFile($request->file('photo'));

        Activity::id($id)->addPhoto($photo);
        // dd($request->file('file'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::id($id);

        return view('pages.admin.activity.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::id($id);

        return view('pages.admin.news.edit', compact('activity'));
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
        $activity = Activity::findOrFail($id);

        $activity->update($request->all());

        return redirect('activity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activity::findOrFail($id)->delete();

        return redirct('activity');
    }

    public function destroyPhoto($id)
    {
        ActivityPhoto::findOrFail($id)->delete();

        return back();
    }
}
