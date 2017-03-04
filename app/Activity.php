<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = [
		'title',
		'description',
		'start_date',
		'end_date',
		'start_time',
		'end_time'
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
		return $this->hasMany('App\ActivityPhoto');
	}
}
