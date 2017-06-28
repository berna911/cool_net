<?php
class Controller_audio extends Controller
{
	function __construct()
	{
		$this -> model = new Model_audio();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("audio_view.php", "vk.php", $data);
	}
}
?>