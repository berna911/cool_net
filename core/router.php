<?php
class Route
{
	static function start()
	{
		if( $_COOKIE['uid'] != null || $_COOKIE['uid'] != "" )
		{
			$controller_name = 'my_page';
			$action_name = 'default';
			$params = array();
		}
		else
		{
			$controller_name = 'auth';
			$action_name = 'default';
			$params = array();
		}
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		/*$modals = stristr($_SERVER['REQUEST_URI'], '#');
		var_dump(parse_url($_SERVER['SERVER_NAME'], PHP_URL_FRAGMENT))
		echo "<pre style='color: #fff' >".$_SERVER['QUERY_STRING']."</pre>";
		if( !empty($modals[0]) )
		{
			echo "<pre style='color: #fff' >".$modals[0]."</pre>";
		}*/

		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		if( !empty($routes[3]) )
		{
			$params[0] = $routes[3]; 
		}

		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;


		$model_file = strtolower($model_name).'.php';
		$model_path = "./models/".$model_file;
		if(file_exists($model_path))
		{
			include "./models/".$model_file;
		}

		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "./controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "./controllers/".$controller_file;
		}
		else
		{
			Route::ErrorPage404();
		}
		
		$controller = new $controller_name;
		$action = $action_name;
		
		if( method_exists($controller, $action) && $params[0] != null )
		{
			$controller -> $action( $params );
		}
		else if( method_exists($controller, $action) )
		{
			$controller -> $action();
		}
		else
		{
			Route::ErrorPage404();
		}
	
	}
	
	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}
?>