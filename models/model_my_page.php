<?php
class Model_my_page extends Model
{
	public function get_data()
	{

		$user = array();
		$users_sr = array();
		$users_high = array();
		$users_career = array();
		$users_war = array();

		$users = DB::getInstance() -> query('SELECT * FROM us_main WHERE id = 3');
		foreach ($users -> results() as $user);

		$user_sr = DB::getInstance() -> query('SELECT * FROM us_srObr WHERE user_id = '.$user -> id);
		foreach ($user_sr -> results() as $users_sr);

		$user_high = DB::getInstance() -> query('SELECT * FROM us_highObr WHERE user_id = '.$user -> id);
		foreach ($user_high -> results() as $users_high);

		$user_career = DB::getInstance() -> query('SELECT * FROM us_career WHERE user_id = '.$user -> id);
		foreach ($user_career -> results() as $users_career);

		$user_war = DB::getInstance() -> query('SELECT * FROM us_war WHERE user_id = '.$user -> id);
		foreach ($user_war -> results() as $users_war);

		$data = array(
										  'id' => $user -> id,
										  'sys_email' => $user -> sys_email,
										  'sys_telephone' => $user -> sys_telephone,
										  'sys_link' => $user -> sys_link,
										  'sys_avatar' => $user -> sys_avatar,
										  'main_name' => $user -> main_name,
										  'main_lastName' => $user -> 	main_lastName,
										  'main_sex' => $user -> main_sex,
										  'main_relationship' => $user -> main_relationship,
										  'main_birthdate' => $user -> main_birthdate,
										  'main_city' => $user -> main_city,
										  'main_languages' => $user -> main_languages,
										  'main_grandfamily' => $user -> main_grandfamily,
										  'main_family' => $user -> main_family,
										  'main_brSys' => $user -> main_brSys,
										  'main_childs' => $user -> main_childs,
										  'main_grandchilds' => $user -> main_grandchilds,
										  'main_birthdayShow' => $user -> main_birthdayShow,
										  'cont_country' => $user -> cont_country,
										  'cont_city' => $user -> cont_city,
										  'cont_rayon' => $user -> cont_rayon,
										  'cont_metro' => $user -> cont_metro,
										  'cont_street' => $user -> cont_street,
										  'cont_name' => $user -> cont_name,
										  'cont_telephone' => $user -> cont_telephone,
										  'cont_secondTelephone' => $user -> cont_secondTelephone,
										  'cont_skype' => $user -> cont_skype,
										  'cont_sait' => $user -> cont_sait,
										  'int_deatel' => $user -> int_deatel,
										  'int_interest' => $user -> int_interest,
										  'int_music' => $user -> int_music,
										  'int_films' => $user -> int_films,
										  'int_teleshow' => $user -> int_teleshow,
										  'int_books' => $user -> int_books,
										  'int_games' => $user -> int_games,
										  'int_citats' => $user -> int_citats,
										  'int_about' => $user -> int_about,
										  'lifePos_politic' => $user -> lifePos_politic,
										  'lifePos_world' => $user -> lifePos_world,
										  'lifePos_life' => $user -> lifePos_life,
										  'lifePos_people' => $user -> lifePos_people,
										  'lifePos_smoke' => $user -> lifePos_smoke,
										  'lifePos_alco' => $user -> lifePos_alco,
										  'lifePos_vdoh' => $user -> lifePos_vdoh,
										  'sr_country' => $users_sr -> sr_country,
						  				  'sr_school' => $users_sr -> sr_school,
						   				  'sr_start' => $users_sr -> sr_start,
						   				  'sr_end' => $users_sr -> sr_end,
						   				  'sr_date' => $users_sr -> sr_date,
						   				  'sr_class' => $users_sr -> sr_class,
						   				  'sr_specialization' => $users_sr -> sr_specialization,
						   				  'high_country' => $users_high -> high_country,
										  'high_city' => $users_high -> high_city,
										  'high_vuz' => $users_high -> high_vuz,
										  'high_fakultet' => $users_high -> high_fakultet,
										  'high_study_form' => $users_high -> high_study_form,
										  'high_status' => $users_high -> high_status,
										  'high_date' => $users_high -> high_date,
										  'car_jobPlace' => $users_career -> car_jobPlace,
						   				  'car_start' => $users_career -> car_start,
						   				  'car_end' => $users_career -> car_end,
						   				  'car_country' => $users_career -> car_country,
						   				  'car_dol' => $users_career -> car_dol,
						   				  'war_country' => $users_war -> war_country,
										  'war_chast' => $users_war -> war_chast,
										  'war_start' => $users_war -> war_start,
										  'war_end' => $users_war -> war_end
										);
		return $data;
	}
}
?>