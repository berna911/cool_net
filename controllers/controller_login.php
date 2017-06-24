<?php
class Controller_login extends Controller
{
	function __construct()
	{
		$this -> model = new Model_login();
		$this -> view = new View();
	}
	function action_default()
	{	
		$data = $this->model->get_data();
		$this->view->generate('login_view.php', 'vk.php', $data);
	}
}
?>