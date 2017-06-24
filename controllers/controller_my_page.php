<?php
class Controller_my_page extends Controller
{
	function __construct()
	{
		$this -> model = new Model_my_page();
		$this -> view = new View();
	}
	function action_default()
	{	
		$data = $this->model->get_data();
		$this->view->generate('my_page_view.php', 'vk.php', $data);
	}
}
?>