<?php
class Controller_auth extends Controller
{
	function __construct()
	{
		$this -> model = new Model_auth();
		$this -> view = new View();
	}

	function action_default()
	{
		$data = $this -> model -> get_data();
		$this -> view -> generate("auth_view.php", "auth.php", $data);
	}
}
?>