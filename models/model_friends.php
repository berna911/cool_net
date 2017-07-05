<?php
class Model_friends extends Model
{
	public function get_data()
	{
		$usrers;
		$user_fr_single;
		$user_fr = array();
		$user_fr_main;

		$users = DB::getInstance() -> query('SELECT * FROM us_main WHERE id = 3');
		foreach ($users -> results() as $user);

		$user_friends = DB::getInstance() -> query('SELECT rel_friends FROM us_main WHERE id=3');

		foreach ($user_friends -> results() as $friends) {
			$user_fr_single = $friends -> rel_friends;
		}

		$data = array(
						'name' => array(),
						'lastName' => array(),
						'avatar' => array(),
						'counter' => 0
					 );

		$user_fr = explode(";", $user_fr_single);

			$data['counter'] = count($user_fr);

			for($i = 0; $i < count($user_fr) - 1; $i++)
			{
				$user_fr_main[$i] = DB::getInstance() -> query('SELECT main_name, main_lastName, sys_avatar FROM us_main WHERE id='.$user_fr[$i]);
				foreach ($user_fr_main[$i] -> results() as $user_fr_mainn) {
					$data['name'][$i] = $user_fr_mainn -> main_name;
					$data['lastName'][$i] = $user_fr_mainn -> main_lastName;
					$data['avatar'][$i] = $user_fr_mainn -> sys_avatar;
				}
			}

		return $data;
	}
}
?>