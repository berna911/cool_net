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
		$data = $this->model->get_data( array(3) );
		$this->view->generate('my_page_view.php', 'vk.php', $data);
	}

	function action_user( $params )
	{
		$data = $this->model->get_data( $params );
		$this->view->generate('my_page_view.php', 'vk.php', $data);
	}
}
?>