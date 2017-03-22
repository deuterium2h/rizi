<?php

namespace App\Http;

class Flash {
	
	public function message($title, $message, $type)
	{
		session()->flash('flash_message', [
			'title' => $title,
			'message' => $message,
			'type' => $type
			]);
	}
}