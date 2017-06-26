<?php
class Controller_dialogs extends Controller
{
	function __construct()
	{
		$this -> model = new Model_dialogs();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("dialogs_view.php", "vk.php", $data);
	}
}
?>