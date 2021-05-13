<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
require_once "app/config/environment.php";

if(ENVIRONMENT == "developer"){
    define("BASE_URL", "http://localhost/projetos/crud_mvc");
}else if(ENVIRONMENT == "producer"){
    define("BASE_URL", "https://clientes.laborcode.com.br/crud_mvc");
}

spl_autoload_register(function($class){
    if(file_exists("app/core/".$class.".php")){
        require_once "app/core/".$class.".php";
    }
    if(file_exists("app/model/".$class.".php")){
        require_once "app/model/".$class.".php";
    }
    if(file_exists("app/controller/".$class.".php")){
        require_once "app/controller/".$class.".php";
    }
    if(file_exists("app/view/".$class.".php")){
        require_once "app/view/".$class.".php";
    }
    if(file_exists("app/config/".$class.".php")){
        require_once "app/config/".$class.".php";
    }
});
Conection::conectionMethod();
Core::start();