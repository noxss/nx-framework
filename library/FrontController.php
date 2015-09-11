<?php
class FrontController
{
    static function main()
    {
        session_start();
        
        $lib = 'library/';
        require $lib.'Config.php';
        require $lib.'ModelBase.php';
        require $lib.'ControllerBase.php';
        require $lib.'SPDO.php';
        require $lib.'View.php';
        require $lib.'Functions.php';

        require 'config.php';
        
        //Build controller
        if(isset($_GET['c']) && !empty($_GET['c']))
		{
              $controllerName = $_GET['c'] . 'Controller';
		}
		else
        {
		      $controllerName = "indexController";
		}
		
        //Build action
        if(! empty($_GET['a']))
              $actionName = $_GET['a']."Action";
        else
              $actionName = "indexAction";

        $controllerPath = $config->get('controllersFolder') . $controllerName . '.php';

        //Check controller
        if(is_file($controllerPath))
        {
            require $controllerPath;
        }
        else
        {
			die('Sorry, page not found!');
			exit();
        }

        if (is_callable(array($controllerName, $actionName)) == false)
        {
            die('Sorry, page not found!');
            //trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
            return false;
        }

        $controller = new $controllerName();
        $controller->$actionName();

    }
}
?>