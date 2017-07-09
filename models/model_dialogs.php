<?php
class Model_dialogs extends Model
{
	public function get_data()
	{
		$dialogs = DB::getInstance() -> query("SELECT * FROM us_dialogs");

		$dialogs_count = $dialogs -> count();

		for( $i = 0; $i < $dialogs_count; $i++ ) $users[$i] = explode(";", $dialogs -> results()[$i] -> users);

		$data = array(
					   "dialog_id" => array(),
					   "mes_name" => array(),
					   "mes_lastName" => array(),
					   "mes_avatar" => array(),
					   "mes_date" => array(),
					   "counter" => 0
					  );
		$index = 0;
		$dat_ind = $dialogs_count;
		for( $i = 0; $i < $dialogs_count; $i++ )
		{
			for( $z = 0; $z < count($users[$i]); $z++ )
			if( $users[$i][$z] == 3 )
			{
				if( $z == 0 )
				{
					$oth_us = DB::getInstance() -> query("SELECT main_name, main_lastName, sys_avatar FROM us_main WHERE id = ".$users[$i][1]);
						$data["mes_name"][$index] = $oth_us -> results()[$dat_ind] -> main_name;
						$data["mes_lastName"][$index] = $oth_us -> results()[$dat_ind] -> main_lastName;
						$data["mes_avatar"][$index] = $oth_us -> results()[$dat_ind] -> sys_avatar;
						$dat_ind++;
						$oth_mes = DB::getInstance() -> query("SELECT * FROM us_messages WHERE dialog_id = ".$dialogs -> results()[$i] -> id);
						$data["mes_text"][$index] = $oth_mes -> results()[$dat_ind] -> text;
						$data["mes_date"][$index] = $oth_mes -> results()[$dat_ind] -> date;
						$dat_ind += $oth_mes -> count();
				}
				else if( $z == 1 )
				{
					$oth_us = DB::getInstance() -> query("SELECT main_name, main_lastName, sys_avatar FROM us_main WHERE id = ".$users[$i][0]);
						$data["mes_name"][$index] = $oth_us -> results()[$dat_ind] -> main_name;
						$data["mes_lastName"][$index] = $oth_us -> results()[$dat_ind] -> main_lastName;
						$data["mes_avatar"][$index] = $oth_us -> results()[$dat_ind] -> sys_avatar;
						$dat_ind ++;

						$oth_mes = DB::getInstance() -> query("SELECT * FROM us_messages WHERE dialog_id = ".$dialogs -> results()[$i] -> id);
						$data["mes_text"][$index] = $oth_mes -> results()[$dat_ind] -> text;
						$data["mes_date"][$index] = $oth_mes -> results()[$dat_ind] -> date;
						$dat_ind += $oth_mes -> count();
				}

				$data["dialog_id"][$index] = $dialogs -> results()[$i] -> id;
				$index++;
			}
		}

		$data["counter"] = $index;

		return $data;
	}
}
?>