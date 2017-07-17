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
		$sr_counter = $user_sr -> count();

		$user_high = DB::getInstance() -> query('SELECT * FROM us_highObr WHERE user_id = '.$params[0]);
		$high_counter = $user_high -> count();

		$user_career = DB::getInstance() -> query('SELECT * FROM us_career WHERE user_id = '.$params[0]);
		$career_counter = $user_career -> count();

		$user_war = DB::getInstance() -> query('SELECT * FROM us_war WHERE user_id = '.$params[0]);

		$user_friends = DB::getInstance() -> query('SELECT rel_friends FROM us_main WHERE id = '.$params[0]);
		$user_fr_counter = $user_friends -> count();

		$user_wall = DB::getInstance() -> query('SELECT * FROM us_posts WHERE author = '.$params[0]);	
		$wall_counter = $user_wall -> count();

		$photo_list = DB::getInstance() -> query("SELECT * FROM us_photo WHERE user_id = ".$params[0]);

		$photo_counter = $photo_list -> count();

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
										  'sr_country' => array(),
						  				  'sr_school' => array(),
						   				  'sr_start' => array(),
						   				  'sr_end' => array(),
						   				  'sr_date' => array(),
						   				  'sr_class' => array(),
						   				  'sr_specialization' => array(),
						   				  'sr_counter' => 0,
						   				  'high_country' => array(),
										  'high_city' => array(),
										  'high_vuz' => array(),
										  'high_fakultet' => array(),
										  'high_study_form' => array(),
										  'high_status' => array(),
										  'high_date' => array(),
										  'high_counter' => 0,
										  'car_jobPlace' => array(),
						   				  'car_start' => array(),
						   				  'car_end' => array(),
						   				  'car_country' => array(),
						   				  'car_dol' => array(),
						   				  'car_counter' => 0,
						   				  'war_country' => array(),
										  'war_chast' => array(),
										  'war_start' => array(),
										  'war_end' => array(),
										  'war_counter' => 0,
										  'user_friends_name' => array(),
										  'user_friends_avatar' => array(),
										  'user_friends_id' => array(),
										  'user_friends_count' => 0,
										  'user_wall_author' => array(),
										  'user_wall_date' => array(),
										  'user_wall_text' => array(),
										  'user_wall_likes' => array(),
										  'user_wall_count' => $wall_counter,
										  'us_photo' => array(),
										  'us_photo_count' => $photo_counter
										);
			$counterr = 1;

			$data['sr_counter'] = $sr_counter;
			if( $data['sr_counter'] > 0 )
			{
			for( $i = 0; $i < $data['sr_counter']; $i++ )
			{
				$data['sr_country'][$i] = $user_sr -> results()[$counterr] -> sr_country;
				$data['sr_school'][$i] = $user_sr -> results()[$counterr]  -> sr_school;
				$data['sr_start'][$i] = $user_sr -> results()[$counterr] -> sr_start;
				$data['sr_end'][$i] = $user_sr -> results()[$counterr] -> sr_end;
				$data['sr_date'][$i] = $user_sr -> results()[$counterr] -> sr_date;
				$data['sr_class'][$i] = $user_sr -> results()[$counterr] -> sr_class;
				$data['sr_specialization'][$i] = $user_sr -> results()[$counterr] -> sr_specialization;
				$counterr ++;
			}
			}

			$data['high_counter'] = $high_counter;
			if( $high_counter > 0 )
			{
			for( $i = 0; $i < $high_counter; $i++ )
			{
				$data['high_country'][$i] = $user_high -> results()[$counterr] -> high_country;
				$data['high_city'][$i] = $user_high -> results()[$counterr] -> high_city;
				$data['high_vuz'][$i] = $user_high -> results()[$counterr] -> high_vuz;
				$data['high_fakultet'][$i] = $user_high -> results()[$counterr] -> high_fakultet;
				$data['high_study_form'][$i] = $user_high -> results()[$counterr] -> high_study_form;
				$data['high_status'][$i] = $user_high -> results()[$counterr] -> high_status;
				$data['high_date'][$i] = $user_high -> results()[$counterr] -> high_date;
				$counterr ++;
			}
			}

			$data['car_counter'] = $career_counter;
			if( $career_counter > 0 )
			{
			for( $i = 0; $i < $career_counter; $i++ )
			{
				$data['car_jobPlace'][$i] = $user_career -> results()[$counterr] -> car_jobPlace;
				$data['car_start'][$i] = $user_career -> results()[$counterr] -> car_start;
				$data['car_end'][$i] = $user_career -> results()[$counterr] -> car_end;
				$data['car_country'][$i] = $user_career -> results()[$counterr] -> car_country;
				$data['car_dol'][$i] = $user_career -> results()[$counterr] -> car_dol;
				$counterr ++;
			}
			}

			$data['war_counter'] = $user_war;
			if( $user_sr -> count() > 0 )
			{
			for( $i = 0; $i < $user_war; $i++ )
			{
				$data['war_country'][$i] = $user_war -> results()[$counterr] -> war_country;
				$data['war_chast'][$i] = $user_war -> results()[$counterr] -> war_chast;
				$data['war_start'][$i] = $user_war -> results()[$counterr] -> war_start;
				$data['war_end'][$i] = $user_war -> results()[$counterr] -> war_end;
				$counterr ++;
			}
			}

			if($user_friends -> results()[$counterr] -> rel_friends != ""){$user_fr_single = $user_friends -> results()[$counterr] -> rel_friends;
			$counterr++;}
			if($wall_counter > 0)
			{
			for($i = 0; $i < $wall_counter; $i++)
			{
					$data['user_wall_author'][$i] = $user_wall -> results()[$counterr] -> author;
					$data['user_wall_date'][$i] = $user_wall -> results()[$counterr] -> date;
					$data['user_wall_text'][$i] = $user_wall -> results()[$counterr] -> text;
					$data['user_wall_likes'][$i] = $user_wall -> results()[$counterr] -> likes;
					$counterr ++;
			}
			}

			if( $photo_counter > 0 )
			{
			for( $i = 0; $i < $photo_counter; $i++ )
			{
				$data["us_photo"][$i] = $photo_list -> results()[$counterr] -> photo;
				$counterr ++;
			}
			}
			if($user_fr_counter > 0){
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
		}

			

		return $data;
	}
}
?>