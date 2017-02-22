<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'published_by'
    ];

    public static function id($id)
	{
		return static::where(compact('id'))->firstOrFail();
	}

	public function addPhoto(NewsPhoto $photo)
	{
		return $this->photos()->save($photo);
	}

	public function photos()
	{
		return $this->hasMany('App\NewsPhoto');
	}
}
