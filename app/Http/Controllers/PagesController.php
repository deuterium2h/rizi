<?php

namespace App\Http\Controllers;

use App\Citizen;
use App\News;
use Illuminate\Http\Request;



class PagesController extends Controller
{
    /**
     * 
     * Welcome Page
     * 
     */
	public function welcome()
	{
        $articles = News::latest('updated_at')->limit(3)->get();
		return view('welcome', compact('articles'));
	}

    public function about_us()
    {
    	return view('about-us');
    }
    /**
     *
     * News Page
     * 
     */
    
    public function activities()
    {
        $activities = Activity::latest('updated_at')->paginate(3);

        return view('activities', compact('activities'));
    }

    public function activity_post($id)
    {
        $activity = Activity::id($id);

        return view('pages.end-user.activity-post', compact('activity'));
    }
    public function news()
    {
        $articles = News::latest('updated_at')->paginate(3);

    	return view('news', compact('articles'));
    }

    public function news_post($id)
    {
        $news = News::id($id);

        return view('pages.end-user.news-post', compact('news'));
    }
}
