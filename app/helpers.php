<?php 
/**
 * Create a flash message with a default type of 'success'
 * @param  string $title   Title of flash message
 * @param  string $message Body/Contents of flash message
 * @param  string $type    Valid values are: ['info', 'success', 'error']
 * @return void
 */
function flash($title, $message, $type = 'success')
{
	$flash = app('App\Http\Flash');

	return $flash->message($title, $message, $type);
}