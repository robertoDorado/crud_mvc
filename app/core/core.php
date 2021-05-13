<?php
abstract class Core {

    public static function start(){

        $params = array();
        if(isset($_GET['url'])){
            $url = explode("/", $_GET['url']);
            array_shift($url);
            $currentController = ucfirst($url[0]) . "Controller";
            array_shift($url);
            
            if(empty($url[0]) || !isset($url[0])){
                $currentAction = "index";
            }else{
                $currentAction = $url[0];
                array_shift($url);
                $params = $url;
            }

            if(!file_exists($currentController) && !method_exists($currentController, $currentAction)){
                $currentController = "NotFoundController";
                $currentAction = "index";
            }
        }else{

            $currentController = "HomeController";
            $currentAction = "index";
        }

        $controller = new $currentController;
        call_user_func_array(array($controller, $currentAction), $params);

    }
}