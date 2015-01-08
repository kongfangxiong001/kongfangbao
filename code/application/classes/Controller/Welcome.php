<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
// 		$pdo  = Database::instance('alternate');
// 		print_r(DB::select("select * from fund_bao"));
		$this->response->body('hello, world!');
	}

}