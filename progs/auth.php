<?php
	require_once '../database/DB.php';
	$login = $_POST['login'];
	$pass = $_POST['pass'];

	$data = DB::getInstance() -> query("SELECT id FROM us_main WHERE sys_email = '".$login."' OR sys_telephone = '".$login."'");
	if( $data -> count() == 0 )
	{
		echo "no";
	}
	else
	{
		setcookie("uid", $data -> results()[0] -> id, time()+60*60*24*365*10, "/");
		echo "ok";
	}
?>