<?php
class Controller_friends extends Controller
{
	function __construct()
	{
		$this -> model = new Model_friends();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("friends_view.php", "vk.php", $data);
	}
}
?>