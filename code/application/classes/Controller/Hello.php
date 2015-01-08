<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Hello extends Controller {

	public function action_index()
	{
		$pdo  = Database::instance('alternate');
		print_r(DB::select("select * from fund_bao"));
		$this->response->body('hello, world!');
	}
	public function action_show()
	{
		$auth_config = Kohana::$config->load('auth');
		$auth = new Auth_Myauth($auth_config);
		$auth->logged_in();
	}
}