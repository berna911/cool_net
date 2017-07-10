<?php
class Model_news extends Model
{
	public function get_data()
	{
		$user_friends = DB::getInstance() -> query('SELECT rel_friends FROM us_main WHERE id=3') -> results()[0] -> rel_friends;

		$user_fr = explode(";", $user_friends);

		$data = array(
					  "author_name" => array(),
					  "author_lastName" => array(),
					  "author_avatar" => array(),
					  "author_count" => 0,
					  "news_text" => array(),
					  "news_date" => array(),
					  "news_likes" => array()
					 );

		$counter = 2;
		$n = 0;
		$fr_c = 1;
		for( $i = 0; $i < count($user_fr) - 1; $i++ )
		{
			$fr = DB::getInstance() -> query("SELECT main_name, main_lastName, sys_avatar FROM us_main WHERE id = ".$user_fr[$i]) -> results();
			$news = DB::getInstance() -> query("SELECT * FROM us_posts WHERE author = ".$user_fr[$i]);
			if( $news -> count() > 0 )
			{
				for( $j = 0; $j < $news -> count(); $j++ )
				{
					$data['author_name'][$n] = $fr[$fr_c] -> main_name;
					$data['author_lastName'][$n] = $fr[$fr_c] -> main_lastName;
					$data['author_avatar'][$n] = $fr[$fr_c] -> sys_avatar;
					$data['news_text'][$n] = $news -> results()[$counter] -> text;
					$n ++;
					$counter ++;
				}
			}
			$counter ++;
			$fr_c += $news -> count() + 1;
		}
		/*for( $i = 0; $i < count($user_fr); $i++ )
		{
			$fr = DB::getInstance() -> query("SELECT main_name, main_lastName, sys_avatar FROM us_main WHERE id = ".$user_fr[$i]) -> results();
			$news = DB::getInstance() -> query("SELECT * FROM us_posts WHERE author = ".$user_fr[$i]);
			if($news -> count() > 0)
			{
				for($z = 0; $z < $news -> count(); $z++)
				{
					$data['author_name'][$i + $z] = $fr[$i + 1] -> main_name;
					$data['author_lastName'][$i + $z] = $fr[$i + 1] -> main_lastName;
					$data['author_avatar'][$i + $z] = $fr[$i + 1] -> sys_avatar;
					$data['news_text'][$i + $z] = $news -> results()[$news -> count() + $i + $counter] -> text;
					$counter ++;
				}
			}
		}*/

		$data['author_count'] = $n;

		return $data;
	}
}
?>