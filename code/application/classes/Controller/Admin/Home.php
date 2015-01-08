<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Home extends Controller{
	public function action_index()
	{
		$pdo = Database::instance('pdo');
		print_r($pdo);
		$pdo->connect();
		$data = array('a'=>'aValue','b'=>'bValue');
		$view = View::factory("admin/home/index",$data);
		Message::show_message(array('title'=>'login','message'=>'Login please'));
		$this->response->body($view);
	}
}