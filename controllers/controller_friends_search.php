<?php
class Controller_friends_search extends Controller
{
	function __construct()
	{
		$this -> model = new Model_friends_search();
		$this -> view = new View();
	}
	function action_default()
	{	
		$data = $this->model->get_data();
		$this->view->generate('friends_search_view.php', 'vk.php', $data);
	}
}
?>