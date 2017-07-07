<?php
class Model_friends_search extends Model
{
	public function get_data()
	{

		$people = DB::getInstance() -> query('SELECT id, main_status, main_name, main_lastName, sys_avatar FROM us_main') -> results();
		$counter = DB::getInstance() -> query('SELECT id FROM us_main') -> count();


		$data = array(
					    'name' => array(),
					    'lastName' => array(),
					    'avatar' => array(),
					    'status' => array(),
					    'counter' => $counter
					 );
		for($i = 0; $i < $counter; $i++)
		{
			$data['id'][$i] = $people[$i] -> id;
			$data['name'][$i] = $people[$i] -> main_name;
			$data['lastName'][$i] = $people[$i] -> main_lastName;
			$data['avatar'][$i] = $people[$i] -> sys_avatar;
			$data['status'][$i] = $people[$i] -> main_status;
		}

		return $data;
	}
}
?>