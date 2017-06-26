<?php
class Controller_news extends Controller
{
	function __construct()
	{
		$this -> model = new Model_news();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("news_view.php", "vk.php", $data);
	}
}
?>