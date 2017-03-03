<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function edit_profile()
    {
        $user = Auth::user();
        return view('pages.admin.edit-profile', compact('user'));
    }

    public function upload_image(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = sha1(time() . '.' . $avatar->getClientOriginalExtension());

            Image::make($avatar)
                ->resize(300,300)
                ->save(public_path('/images/profiles/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
            
        
        return view('pages.admin.edit-profile', compact('user'));
    }
}
