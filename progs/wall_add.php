<?php
require_once '../database/DB.php';

$text = $_POST['text'];

DB::getInstance() -> no_returns("INSERT INTO us_posts (author, date, text, likes) VALUES(
		".$_COOKIE['uid'].",
		'".date('Y-m-d')."',
		'".$text."',
		0
	)");

echo "OK";
?>