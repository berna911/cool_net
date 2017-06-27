<?php
class Controller_messages extends Controller
{
	function __construct()
	{
		$this -> model = new Model_messages();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("messages_view.php", "vk.php", $data);
	}
}
?>