<?php defined('SYSPATH') OR die('No direct script access.');

class Message  extends Controller{
	public static function show_message($message=array())
	{
		print_r($message);
	} 
	public static function body($view)
	{
		parent::body($view);
	}
}
