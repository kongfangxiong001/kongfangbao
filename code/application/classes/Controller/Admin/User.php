<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_User extends Controller{
//	public function Action_Add(){
//		if($user_array = $this->request->post()||1){
//			$user_array = array(
//				'type_id'=>1,
//				'username'=>'tom',
//				'password'=>"123456",
//			);
//			
//			$auth_config = Kohana::$config->load('auth');
//			$auth = new Myauth($auth_config);
//			$user_array['password'] = $auth->hash($user_array['password']);
//			
//			
//			$user_model = Model::factory('User');
//			
//			$user_model->unique('username',$user_array['username']);die();
//			
//			$user_model->add_user($user_array);	
//		}
//	}
//	public function Action_show(){
//		$query = DB::query(Database::INSERT,"INSERT INTO users (username, password) VALUES (:user, :pass)");
//		$query->bind(':user',$username)
//			  ->bind(':pass',$password);
//		
//	}
//	public  function Action_test(){
////		$user_model = Model::factory("User");
////		$user_model->get_user(1);
//		$session = Session::instance();
//		$session->set('e','eValue');
//		$session->set('f','ffff');
//		$session->set("test","testValue");
//		echo $session->get('a');
//	}
	
	public function Action_Add()
	{
		$errors = false;
		if($user_array = $this->request->post()){
			//验证是否符合条件
			$object = Validation::factory($user_array);
			
			$object->label('username','用户名');
			$object->label('confirm','重复密码');
            $object->label('password','密码');
            
            $object->rule('username','min_length',array(':value', '3'));
            $object->rule('username','max_length',array(':value', '30'));
            
            $object->rule('password','min_length',array(':value', '6'));
			$object->rule('confirm',  'matches', array(':validation', 'confirm', 'password'));
			
			if($object->check()){
				unset($user_array['confirm']);
				//密码加密
				$auth_config = Kohana::$config->load('auth');
				$auth = new Myauth($auth_config);
				$user_array['password'] = $auth->hash($user_array['password']);
				
				$user_model = Model::factory('User');
				
				//用户名不存在则插入
				if(!$user_model->exist('username',$user_array['username'])){
					 $user_model->add_user($user_array);
				}
			}
            $errors = $object->errors('admin/user/add');
		}
		
		$type_model = Model::factory('Usertype');
		$user_type = $type_model->get_user_type();
		
		//获取用户类型
		foreach($user_type as $row){
			$types[$row['type_id']] = $row['name'];
		}
		
		$view = View::factory("admin/user/add")
			->set('errors',$errors)
			->set('post',$user_array)
			->set('user_type',$types);
		$this->response->body($view);
	}
	
	
}