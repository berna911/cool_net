<?php
class Controller_albums extends Controller
{
	function __construct()
	{
		$this -> model = new Model_albums();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("albums_view.php", "vk.php", $data);
	}
}
?>