<?php
class Controller_messages extends Controller
{
	function __construct()
	{
		$this -> model = new Model_messages();
		$this -> view = new View();
	}

	function action_default($params)
	{
		$data = $this -> model -> get_data($params[0]);
		$this -> view -> generate("messages_view.php", "vk.php", $data);
	}
}
?>