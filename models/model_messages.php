<?php
class Model_messages extends Model
{
	public function get_data( $param )
	{
		$mes = DB::getInstance() -> query("SELECT * FROM us_messages WHERE dialog_id = ".$param);

		$data = array(
					  "text" => array(),
					  "date" => array(),
					  "name" => array(),
					  "avatar" => array(),
					  "counter" => $mes -> count()
					 );

		$mes_counter = $mes -> count();

		for( $i = 0; $i < $mes_counter; $i++ )
		{
			$user = DB::getInstance() -> query( "SELECT main_name, sys_avatar FROM us_main WHERE id = ".$mes -> results()[$i] -> from_id );
			$data["text"][$i] = $mes -> results()[$i] -> text;
			$data["date"][$i] = $mes -> results()[$i] -> date;
			$data["name"][$i] = $user -> results()[$mes_counter+$i] -> main_name;
			$data["avatar"][$i] = $user -> results()[$mes_counter+$i] -> sys_avatar;
		}

		return $data;
	}
}
?>