<?php
    function smile($var){
	$symbol = array(':D',
					':lol:');
	$graph = array(
					'<img class="smile" src="http://www.topglobus.ru/skin/smile/s12628.gif" width="20" height="20" border="0" alt=":D">',
					'<img class="smile" src="http://www.topglobus.ru/skin/smile/s12579.gif" width="20" height="20" border="0" alt=":lol:">');
	return str_replace($symbol, $graph, $var);
	}

class Model_messages extends Model
{

	public function get_data( $param )
	{
		$mes = DB::getInstance() -> query("SELECT * FROM us_messages WHERE dialog_id = ".$param);

		$data = array(
					  "id" => array(),	
					  "dialog_id" => $param,
					  "text" => array(),
					  "date" => array(),
					  "name" => array(),
					  "avatar" => array(),
					  "counter" => $mes -> count()
					 );

		$mes_counter = $mes -> count();

		for( $i = 0; $i < $mes_counter; $i++ )
		{
			$user = DB::getInstance() -> query( "SELECT id, main_name, sys_avatar FROM us_main WHERE id = ".$mes -> results()[$i] -> from_id );
			$data["text"][$i] = nl2br(smile(htmlspecialchars($mes -> results()[$i] -> text)));
			$data["date"][$i] = $mes -> results()[$i] -> date;
			$data['id'][$i] = $user -> results()[$mes_counter+$i] -> id;
			$data["name"][$i] = $user -> results()[$mes_counter+$i] -> main_name;
			$data["avatar"][$i] = $user -> results()[$mes_counter+$i] -> sys_avatar;
		}

		return $data;
	}
}
?>