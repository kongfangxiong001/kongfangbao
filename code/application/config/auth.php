<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'driver'       => 'Myauth',
	'hash_method'  => 'sha256',
	'hash_key'     => '2015_kfx',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'example',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	),

);
