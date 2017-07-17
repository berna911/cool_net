<?php
require_once '../database/DB.php';

$id = $_POST['id'];
$text = $_POST['text'];

DB::getInstance() -> no_returns("INSERT INTO us_messages (from_id, dialog_id, text, date) VALUES(
		".$_COOKIE['uid'].",
		".$id.",
		'".$text."',
		'".date('Y-m-d')."'
	)");

echo "OK";
?>