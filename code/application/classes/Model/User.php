<?php
class Model_User extends Model_Database {
//	public function get_user($username){
//		
//		$db = new  Database_PDO($name, $config);
//		$db->query(Database::SELECT,"select * from `rd_user` where `username`=:username");
//	}
	public function add_user($user){
		return	DB::insert('rd_user',array_keys($user))
		            ->values($user)
		            ->execute();
	}
	
	public function exist($column,$value){
		$query = DB::select("count('user_id') as total")->from('rd_user')->where($column,'=',$value);
		$res=$query->execute();
		$result = $res->as_array();
		return $result[0]['total'];
	}
	
//	public function get_user($user_id){
//		$sql = "select * from `rd_user` where `user_id`=$user_id";
//		$result = $this->_db->query(Database::SELECT,$sql,false);
//		print_r($result);
//	}

	public function get_user($user_id){
		$query = DB::select()->from('rd_user')->where('user_id','=',$user_id);
		$res=$query->execute();
		return $res->as_array();
	}
	
	
	
}