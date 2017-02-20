<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function welcome()
	{
		return view('welcome');
	}
    public function about_us()
    {
    	return view('about-us');
    }
    public function news()
    {
    	return view('news');
    }
}
