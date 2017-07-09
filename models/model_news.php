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

		$counter = 0;
		for( $i = 0; $i < count($user_fr); $i++ )
		{
			$fr = DB::getInstance() -> query("SELECT main_name, main_lastName, sys_avatar FROM us_main WHERE id = ".$user_fr[$i]) -> results();
			$news = DB::getInstance() -> query("SELECT * FROM us_posts WHERE author = ".$user_fr[$i]);
			if($news -> count() > 0)
			{
				for($z = 0; $z < $news -> count(); $z++)
				{
					$data['author_name'][$counter] = $fr[$z + $counter] -> main_name;
					$data['author_lastName'][$counter] = $fr[$z + $counter] -> main_lastName;
					$data['author_avatar'][$counter] = $fr[$z + $counter] -> sys_avatar;
					$data['news_text'][$counter] = $news -> results()[$z + $counter + 1] -> text;
					$counter ++;
				}
			}
		}

		$data['author_count'] = $counter;

		return $data;
	}
}
?>