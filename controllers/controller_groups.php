<?php
class Controller_groups extends Controller
{
	function __construct()
	{
		$this -> model = new Model_groups();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("groups_view.php", "vk.php", $data);
	}
}
?>