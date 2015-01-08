<?php
class Model_Usertype extends Model_Database {
	public function get_user_type($type_id=NULL)
	{
		$query = DB::select("type_id,name")
			->from('rd_user_type');
			
		if($type_id){
			$query = $query->where('type_id','=',$type_id);
		}
		$res = $query->execute();
		return $res->as_array();
	}
}