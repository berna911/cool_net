<?php
class Model_my_page extends Model
{
	public function get_data( $params = null )
	{

		$data = array();
		$user_fr_single;
		$user_fr = array();
		$user_fr_main;

		$users = DB::getInstance() -> query('SELECT * FROM us_main WHERE id = '.$params[0]);

		$user_sr = DB::getInstance() -> query('SELECT * FROM us_srObr WHERE user_id = '.$params[0]);

		$user_high = DB::getInstance() -> query('SELECT * FROM us_highObr WHERE user_id = '.$params[0]);

		$user_career = DB::getInstance() -> query('SELECT * FROM us_career WHERE user_id = '.$params[0]);

		$user_war = DB::getInstance() -> query('SELECT * FROM us_war WHERE user_id = '.$params[0]);

		$user_friends = DB::getInstance() -> query('SELECT rel_friends FROM us_main WHERE id = '.$params[0]);
		foreach ($user_friends -> results() as $friends) {
			$user_fr_single = $friends -> rel_friends;
		}

		$user_wall = DB::getInstance() -> query('SELECT * FROM us_posts WHERE author = '.$params[0]);	

		$photo_list = DB::getInstance() -> query("SELECT * FROM us_photo WHERE user_id = ".$params[0]);

		$data = array(
										  'id' => $users -> results()[0] -> id,
										  'sys_email' => $users -> results()[0] -> sys_email,
										  'sys_telephone' => $users -> results()[0] -> sys_telephone,
										  'sys_link' => $users -> results()[0] -> sys_link,
										  'sys_avatar' => $users -> results()[0] -> sys_avatar,
										  'main_status' => $users -> results()[0] -> main_status,
										  'main_name' => $users -> results()[0] -> main_name,
										  'main_lastName' => $users -> results()[0] -> 	main_lastName,
										  'main_sex' => $users -> results()[0] -> main_sex,
										  'main_relationship' => $users -> results()[0] -> main_relationship,
										  'main_birthdate' => $users -> results()[0] -> main_birthdate,
										  'main_city' => $users -> results()[0] -> main_city,
										  'main_languages' => $users -> results()[0] -> main_languages,
										  'main_grandfamily' => $users -> results()[0] -> main_grandfamily,
										  'main_family' => $users -> results()[0] -> main_family,
										  'main_brSys' => $users -> results()[0] -> main_brSys,
										  'main_childs' => $users -> results()[0] -> main_childs,
										  'main_grandchilds' => $users -> results()[0] -> main_grandchilds,
										  'main_birthdayShow' => $users -> results()[0] -> main_birthdayShow,
										  'cont_country' => $users -> results()[0] -> cont_country,
										  'cont_city' => $users -> results()[0] -> cont_city,
										  'cont_rayon' => $users -> results()[0] -> cont_rayon,
										  'cont_metro' => $users -> results()[0] -> cont_metro,
										  'cont_street' => $users -> results()[0] -> cont_street,
										  'cont_name' => $users -> results()[0] -> cont_name,
										  'cont_telephone' => $users -> results()[0] -> cont_telephone,
										  'cont_secondTelephone' => $users -> results()[0] -> cont_secondTelephone,
										  'cont_skype' => $users -> results()[0] -> cont_skype,
										  'cont_sait' => $users -> results()[0] -> cont_sait,
										  'int_deatel' => $users -> results()[0] -> int_deatel,
										  'int_interest' => $users -> results()[0] -> int_interest,
										  'int_music' => $users -> results()[0] -> int_music,
										  'int_films' => $users -> results()[0] -> int_films,
										  'int_teleshow' => $users -> results()[0] -> int_teleshow,
										  'int_books' => $users -> results()[0] -> int_books,
										  'int_games' => $users -> results()[0] -> int_games,
										  'int_citats' => $users -> results()[0] -> int_citats,
										  'int_about' => $users -> results()[0] -> int_about,
										  'lifePos_politic' => $users -> results()[0] -> lifePos_politic,
										  'lifePos_world' => $users -> results()[0] -> lifePos_world,
										  'lifePos_life' => $users -> results()[0] -> lifePos_life,
										  'lifePos_people' => $users -> results()[0] -> lifePos_people,
										  'lifePos_smoke' => $users -> results()[0] -> lifePos_smoke,
										  'lifePos_alco' => $users -> results()[0] -> lifePos_alco,
										  'lifePos_vdoh' => $users -> results()[0] -> lifePos_vdoh,
										  'sr_country' => $user_sr -> results()[1] -> sr_country,
						  				  'sr_school' => $user_sr -> results()[1]  -> sr_school,
						   				  'sr_start' => $user_sr -> results()[1] -> sr_start,
						   				  'sr_end' => $user_sr -> results()[1] -> sr_end,
						   				  'sr_date' => $user_sr -> results()[1] -> sr_date,
						   				  'sr_class' => $user_sr -> results()[1] -> sr_class,
						   				  'sr_specialization' => $user_sr -> results()[1] -> sr_specialization,
						   				  'high_country' => $user_high -> results()[2] -> high_country,
										  'high_city' => $user_high -> results()[2] -> high_city,
										  'high_vuz' => $user_high -> results()[2] -> high_vuz,
										  'high_fakultet' => $user_high -> results()[2] -> high_fakultet,
										  'high_study_form' => $user_high -> results()[2] -> high_study_form,
										  'high_status' => $user_high -> results()[2] -> high_status,
										  'high_date' => $user_high -> results()[2] -> high_date,
										  'car_jobPlace' => $user_career -> results()[3] -> car_jobPlace,
						   				  'car_start' => $user_career -> results()[3] -> car_start,
						   				  'car_end' => $user_career -> results()[3] -> car_end,
						   				  'car_country' => $user_career -> results()[3] -> car_country,
						   				  'car_dol' => $user_career -> results()[3] -> car_dol,
						   				  'war_country' => $user_war -> results()[4] -> war_country,
										  'war_chast' => $user_war -> results()[4] -> war_chast,
										  'war_start' => $user_war -> results()[4] -> war_start,
										  'war_end' => $user_war -> results()[4] -> war_end,
										  'user_friends_name' => array(),
										  'user_friends_avatar' => array(),
										  'user_friends_id' => array(),
										  'user_friends_count' => 0,
										  'user_wall_author' => array(),
										  'user_wall_date' => array(),
										  'user_wall_text' => array(),
										  'user_wall_likes' => array(),
										  'user_wall_count' => $user_wall -> count(),
										  'us_photo' => array(),
										  'us_photo_count' => $photo_list -> count()
										);
			$counterr = 6;
			for($i = 0; $i <= $user_wall -> count(); $i++)
			{
					$data['user_wall_author'][$i] = $user_wall -> results()[$counterr] -> author;
					$data['user_wall_date'][$i] = $user_wall -> results()[$counterr] -> date;
					$data['user_wall_text'][$i] = $user_wall -> results()[$counterr] -> text;
					$data['user_wall_likes'][$i] = $user_wall -> results()[$counterr] -> likes;
					$counterr ++;
			}

			$photo_inde = $counterr;
			for( $i = 0; $i < $photo_list -> count(); $i++ )
			{
				$data["us_photo"][$i] = $photo_list -> results()[$photo_inde] -> photo;
				$photo_inde ++;
			}

			$user_fr = explode(";", $user_fr_single);

			$data['user_friends_count'] = count($user_fr);

			for($i = 0; $i < count($user_fr) - 1; $i++)
			{
				$user_fr_main[$i] = DB::getInstance() -> query('SELECT id,main_name,sys_avatar FROM us_main WHERE id='.$user_fr[$i]);
				foreach ($user_fr_main[$i] -> results() as $user_fr_mainn) {
					$data['user_friends_id'][$i] = $user_fr_mainn -> id;
					$data['user_friends_name'][$i] = $user_fr_mainn -> main_name;
					$data['user_friends_avatar'][$i] = $user_fr_mainn -> sys_avatar;
				}
			}

			

		return $data;
	}
}
?>